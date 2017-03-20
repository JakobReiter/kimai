<?php
    header('Content-type: text/css');
    $table_header = "../../../skins/standard/grfx/g3_table_header.png";
?>

#workview_header {
    border: 1px solid black;
    border-bottom: none;
    background-image: url('<?php echo $table_header; ?>');
    position: absolute;
    height: 25px;
    text-align: left;
    color: #FFF;
    left: 10px;
    font-size: 11px;
    font-weight: bold;
}

div .workview {
    border: 1px solid black;
    padding: 5px;
    margin: 25px 10px 10px;
    color: black;
    background: white;
}

h1 {
    color: #f00;
}

#testdiv {
    padding: 5px;
    color: gray;
    background: yellow;
}
