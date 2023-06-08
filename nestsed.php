<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS GRID</title>
    <style>
        .wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            grid-auto-rows: minmax(100px, auto);
            grid-gap: 1em;
            justify-items: stretch;
            align-items: stretch;
            /* justify and align items can vbe set to start which puts the elememnts at the start of its column and top align items ; (End puts it ath the end of column and stretch is the default) */
        }

        .wrapper>div {
            background: #eee;
            padding: 1em;
        }

        .wrapper>div:nth-child(odd) {
            background: #bbb;
        }

        .box1 {
            /* align-self: start; */
            grid-column: 1/3;
            grid-row: 1/4;
        }

        .box2 {
            /* align-self: end; */
            grid-column: 3;
            grid-row: 1/4;
        }

        .box3 {
            /* justify-self: end; */
            grid-column:1/4;
            grid-row: 4;
        }

        .box4 {
            /* justify-self: start; */
            grid-column: 1/4;
            grid-row: 5/10;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="box box1">Box 1</div>
        <div class="box box2">Box 2</div>
        <div class="box box3">Box 3</div>
        <div class="box box4">Box 4</div>
    </div>
</body>

</html>