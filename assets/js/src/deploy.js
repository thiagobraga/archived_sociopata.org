var deploy = (function () {

    'use strict';
    var

        updateDatabase = (function () {
            var button = $('button'),
                result = $('#result');

            button.on('click', function () {
                if (result.find('.hljs')) {
                    result.find('.hljs').html('');
                }

                setTimeout(function () {
                    $.ajax({
                        url: '/deploy/ajax_updateDatabase',
                        success: function (response) {
                            console.log(response);
                            var i,
                                content = '<pre><code>';

                            for (i = 0; i < response.output.length; i++) {
                                if (
                                    response.output[i].indexOf('--') === 0 ||
                                    response.output[i].indexOf('Bye') === 0 ||
                                    response.output[i] === ''
                                ) {
                                    continue;
                                } else if (
                                    response.output[i].indexOf('Query OK') === 0 ||
                                    response.output[i].indexOf('Warning') === 0
                                ) {
                                    content += response.output[i] + '<br/><br/>';
                                } else {
                                    content += response.output[i] + '<br/>';
                                }
                            }

                            if (response.return == 1) {
                                content += '<br/><br/><b style="color: #ce5353 !important">Ocorreu um erro na execução do arquivo</b>';
                            }

                            content += '</code></pre>';

                            document.getElementById('result').innerHTML = content;

                            $('pre code').each(function (i, e) {
                                hljs.highlightBlock(e);
                            });
                        }
                    });
                }, 1500);
            });
        }()),

        syntaxHighlight = (function () {
            var editor = CodeMirror.fromTextArea(document.getElementById("query"), {
                lineNumbers: true,
                styleActiveLine: true,
                matchBrackets: true,
                mode: 'text/x-mysql',
                theme: 'monokai'
            });
        }());

}());
