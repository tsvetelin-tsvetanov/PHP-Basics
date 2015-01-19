<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>04.HTML Tags Counter</title>
</head>
<body>
<h5>Enter HTML tags:</h5>
<form method="post" action="04.HTMLTagsCounter.php">
    <input type="text" name="input"/>
    <input type="submit"/>
</form>
<?php
    $htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
        'script', 'noscript', 'template', 'body', 'section', 'nav',
        'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
        'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
        'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
        'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
        'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
        'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
        'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
        'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
        'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
        'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
        'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
        'label', 'input', 'button', 'select', 'datalist', 'optgroup',
        'option', 'textarea', 'keygen', 'output', 'progress',
        'meter', 'details', 'summary', 'menuitem', 'menu');

    if(isset($_POST['input'])):
        if(!isset($_SESSION['count'])):
            $_SESSION['count']=0;
        endif;

        if(in_array($_POST['input'], $htmlTags)):
            $_SESSION['count']++; ?>
        <p>Valid HTML Tag!</p>
        <p>Score: <?php echo $_SESSION['count'] ?></p>
        <?php else: ?>
        <p>Invalid HTML Tag!</p>
        <p>Score: <?php echo $_SESSION['count'] ?></p>
        <?php
        endif;
        endif;
        ?>
</body>
</html>