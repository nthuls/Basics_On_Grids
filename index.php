<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRIDS</title>
    <style>
        .wrapper {
            display: grid;
            /* display: grid; is just same as display flex but it cannot work alone, because we need to define the width of elements */
            grid-template-columns: 70% 30%;
            /* grid-template-columns: 70% 30%; this code defines the main div and sidebar div and this works as a 70% on main div and 30% on sidebar div but the columns can be added or reduced with a width of upto 100% for example (30%, 30%, 40%)(this displays 3 columns))*/
            /* grid-column-gap:1em;
            grid-row-gap: 1em; 
            The code above works when you want to put diffrent padding on the grid columns and rows*/
            grid-gap: 1em;
            /* This code abpve puts a padding around the grids for space */
        }

        .wrapper>div {
            background: #eee;
            /* background: #eee; this displays the background color for the div tags inside the wrapper class */
            padding: 1em;
            /*  padding: 1em; better derives the columns */
        }

        .wrapper>div:nth-child(odd) {
            /* .wrapper>div:nth-child(odd){} = displays this specific background color to every odd number*/
            background: #bbb;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quasi blanditiis dolore saepe reiciendis dolores soluta enim, dolorum assumenda quaerat nisi odit! Molestias dolores in quis corrupti culpa asperiores vitae numquam labore nisi minima quae officiis ex, est sit placeat commodi ad repellendus, fuga molestiae! Deleniti, eius hic. Aspernatur quibusdam, blanditiis consectetur in cumque repudiandae sed fugit, facilis quaerat temporibus voluptate odio aperiam laboriosam dolorum possimus nisi. Blanditiis fuga nulla rem enim, magnam iure laborum laudantium explicabo, quaerat fugit rerum!
        </div>
        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nisi. Adipisci qui maxime consectetur aperiam quasi? Magni, quidem incidunt doloribus deleniti, repellat recusandae voluptatem nam modi nostrum assumenda delectus similique!
        </div>
    </div>

</body>

</html>