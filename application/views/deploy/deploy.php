<link href="/assets/bower/codemirror/lib/codemirror.css" rel="stylesheet" />
<link href="/assets/bower/codemirror/theme/monokai.css" rel="stylesheet" />
<script src="/assets/bower/codemirror/lib/codemirror.js"></script>
<script src="/assets/bower/codemirror/mode/sql/sql.js"></script>
<script src="/assets/bower/codemirror-emmet/emmet.js"></script>

<link href="/assets/bower/highlightjs/styles/zenburn.css" rel="stylesheet" />
<script src="/assets/bower/highlightjs/highlight.pack.js"></script>

<style>
    .hljs {
        min-height: 400px;
        overflow: auto;
    }

    .container > .row {
        margin-top: 30px;
    }

    .CodeMirror {
        height: 150px;
    }
</style>


<div class="col-sm-4">
    <h4 class="page-header">Deploy</h4>

    <p><button class="btn btn-primary">Atualizar banco de dados</button></p>
</div>

<div class="col-sm-8">
    <textarea id="query" name="query">SELECT * FROM INFORMATION_SCHEMA.TABLES</textarea>

    <div id="result"></div>
</div>
