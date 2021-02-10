

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">

    <title>Fives</title>

    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css'>
    <style>
        *, *:before, *:after {
            box-sizing: border-box;
        }

        html {
            overflow-y: scroll;
        }

        body {
            background: #c1bdba;
            font-family: 'Titillium Web', sans-serif;
        }

        a {
            text-decoration: none;
            color: #1ab188;
            transition: .5s ease;
        }
        a:hover {
            color: #179b77;
        }

        .form {
            background: rgba(19, 35, 47, 0.9);
            padding: 40px;
            max-width: 600px;
            margin: 40px auto;
            border-radius: 4px;
            box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        }

        .tab-group {
            list-style: none;
            padding: 0;
            margin: 0 0 40px 0;
        }
        .tab-group:after {
            content: "";
            display: table;
            clear: both;
        }
        .tab-group li a {
            display: block;
            text-decoration: none;
            padding: 15px;
            background: rgba(160, 179, 176, 0.25);
            color: #a0b3b0;
            font-size: 20px;
            float: left;
            width: 50%;
            text-align: center;
            cursor: pointer;
            transition: .5s ease;
        }
        .tab-group li a:hover {
            background: #179b77;
            color: #ffffff;
        }
        .tab-group .active a {
            background: #1ab188;
            color: #ffffff;
        }

        .tab-content > div:last-child {
            display: none;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            font-weight: 300;
            margin: 0 0 40px;
        }

        label {
            position: absolute;
            transform: translateY(6px);
            left: 13px;
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.25s ease;
            -webkit-backface-visibility: hidden;
            pointer-events: none;
            font-size: 22px;
        }
        label .req {
            margin: 2px;
            color: #1ab188;
        }

        label.active {
            transform: translateY(50px);
            left: 2px;
            font-size: 14px;
        }
        label.active .req {
            opacity: 0;
        }

        label.highlight {
            color: #ffffff;
        }

        input, textarea {
            font-size: 22px;
            display: block;
            width: 100%;
            height: 100%;
            padding: 5px 10px;
            background: none;
            background-image: none;
            border: 1px solid #a0b3b0;
            color: #ffffff;
            border-radius: 0;
            transition: border-color .25s ease, box-shadow .25s ease;
        }
        input:focus, textarea:focus {
            outline: 0;
            border-color: #1ab188;
        }

        textarea {
            border: 2px solid #a0b3b0;
            resize: vertical;
        }

        .field-wrap {
            position: relative;
            margin-bottom: 40px;
        }

        .top-row:after {
            content: "";
            display: table;
            clear: both;
        }
        .top-row > div {
            float: left;
            width: 48%;
            margin-right: 4%;
        }
        .top-row > div:last-child {
            margin: 0;
        }

        .button {
            border: 0;
            outline: none;
            border-radius: 0;
            padding: 15px 0;
            font-size: 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .1em;
            background: #1ab188;
            color: #ffffff;
            transition: all 0.5s ease;
            -webkit-appearance: none;
        }
        .button:hover, .button:focus {
            background: #179b77;
        }

        .button-block {
            display: block;
            width: 100%;
        }

        .forgot {
            margin-top: -20px;
            text-align: right;
        }
        .input {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .selection{
            width: 100%;
            padding: 20px;
            font-size: 22px;
            background-color:rgba(19, 35, 47, 0.9);
            color:white;
        }
        .card-title {
            font-weight: 300;
            font-size: 2rem;
        }
        .product-card .card {
            margin: 20px;
            overflow: hidden;
            height: 500px;
            width: 300px;
        }
        .product-card .card .card-content {
            padding: 5px;
        }
        .product-card .card .price {
            width: 70px;
            height: 70px;
            font-weight: 600;
            font-size: 1.45rem;
            line-height: 70px;
            margin: 10px;
            position: absolute;
            top: 0;
            letter-spacing: 0;
        }
        .product-card ul.card-action-buttons {
            margin: -18px 7px 0 0;
            text-align: right;
        }
        .product-card ul.card-action-buttons li {
            display: inline-block;
            padding-left: 7px;
        }
        .product {
            width: 20%;
            padding: 10px;
        }
        .product .card {
            margin: 0;
        }
        .product .card .card-content {
            padding: 5px 10px;
        }
        .card .card-image img{
            height: 100%;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no" >
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Free</h1>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>
            <div class="row">
                @foreach($products as $product)

                <div class="col l4 m8 s12 offset-m2 offset-l4">
                    <div class="product-card">
                        <div class="card  z-depth-4">
                            <div class="card-image">
                                <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3">{{$product->price}} €</a>
                                <td><img src="media/{{$product->image ? $product->image : "User Has no Media"}}" height="300" /> </td>
                                <span class="card-title"><span> {{$product->name}}</span></span>
                            </div>
                            <ul class="card-action-buttons">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/" target="_blank" class="btn-floating waves-effect waves-light white"><i class="material-icons grey-text text-darken-3">share</i></a>
                                </li>
                                <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="material-icons like">favorite_border</i></a>
                                </li>
                                <li><a id="buy" class="btn-floating waves-effect waves-light blue"><i class="material-icons buy">add_shopping_cart</i></a>
                                </li>
                            </ul>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <p>
                                            <strong>Description:</strong> <br />
                                            {{$product->description}}
                                        </p>
                                    </div>

                                </div>
                                </div>
                        </div>
                    </div>
                </div>
{{--                    {{$product->name}}--}}
{{--                    {{$product->price}}--}}
{{--                    {{$product->add}}--}}
{{--                    {{$product->type->name}}--}}
                @endforeach
            </div>
        </div>
</div>

</div><!-- tab-content -->

</div> <!-- /form -->

{{--<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>--}}

<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js'></script>
<script id="rendered-js" >
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

var $this = $(this),
label = $this.prev('label');

if (e.type === 'keyup') {
if ($this.val() === '') {
    label.removeClass('active highlight');
} else {
    label.addClass('active highlight');
}
} else if (e.type === 'blur') {
if ($this.val() === '') {
    label.removeClass('active highlight');
} else {
    label.removeClass('highlight');
}
} else if (e.type === 'focus') {

if ($this.val() === '') {
    label.removeClass('highlight');
} else
if ($this.val() !== '') {
    label.addClass('highlight');
}
}

});

$('.tab a').on('click', function (e) {

e.preventDefault();

$(this).parent().addClass('active');
$(this).parent().siblings().removeClass('active');

target = $(this).attr('href');

$('.tab-content > div').not(target).hide();

$(target).fadeIn(600);

});
//# sourceURL=pen.js
</script>


</body>

</html>

