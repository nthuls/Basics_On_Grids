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
            /* grid-template-columns: 1fr 2fr 1fr; */
            /*grid-template-columns:1fr 1fr 1fr ; (this code displays 3 columns that are equally divided by the 1fr statements, if you want a bigger partition increase fr size eg (grid-template-columns: 1fr 3fr 1fr;)) */
            grid-template-columns: repeat(3, 1fr);
            /* grid-template-columns: repeat(4, 1fr); (this code above asks the computer to repeat the 1fr statement 4 times) */
            grid-gap: 1em;
            /* grid-gap: 1em; (this code puts a 1em padding around the grid ) */
            /* grid-auto-rows: 150px; */
            /* grid-auto-rows: 150px; (this code sets the height of the grid to 150px) */
            grid-auto-rows: minmax(100px, auto);
            /* grid-auto-rows: minmax(100px, auto); (this code sets the default height of the grid as 100px but it allows the row to strethch to fit content) */
        }

        .nested {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 70px;
            grid-gap: 1em;
        }

        .wrapper>div {
            background: #eee;
            padding: 1em;
        }

        .wrapper>div:nth-child(odd) {
            background: #bbb;
        }

        .nested >div{
            border: #eee 1px solid; 
            padding: 1em;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div class="nested">
            <div>lorem</div>
            <div>lorem</div>
            <div>lorem</div>
            <div>lorem</div>
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt doloribus, debitis molestiae incidunt, laboriosam delectus sit corporis eos hic ex reprehenderit dolorem veritatis modi porro quibusdam nesciunt tempore quam. Consectetur possimus quos, vitae assumenda vero quasi harum laudantium praesentium! Doloremque impedit dolore eius corporis aspernatur, dicta ex assumenda temporibus ad?
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
        <div>
            Lorem ipsum dolor sit.
        </div>
    </div>
</body>

</html>