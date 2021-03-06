<html>
<head>
<title>Error 403</title>

<style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #808080;
        display: table;
        font-weight: 100;
    }
    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }
    .content {
        text-align: center;
        display: inline-block;
    }
    .title {
        font-size: 156px;
    }
    .quote {
        font-size: 36px;
    }
    .explanation {
        font-size: 24px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">403</div>
        <div class="quote">Forbidden.</div>
        <div class="explanation">
            <br>
            <small>
                <?php
                $default_error_message = "Please return to <a href='".url('/')."'>our homepage</a>.";
                ?>
                {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
            </small>
        </div>
    </div>
</div>
</body>
</html>