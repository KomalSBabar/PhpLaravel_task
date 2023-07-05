<html>
    <head>
        <style>
            .outer {
                /* display: flex; */
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .inner {
                /* display: grid; */
                /* grid-template-columns: auto auto; */
                grid-gap: 5px;
                padding: 171px 78px 93px 620px;
            }
            button {
                height: 10vh;
                width: 25vw;
                padding-top:25px;
                border-radius:50px;
                background-color:#d2afec;
                color:black;
                text-align: center;
                padding-bottom: 2pc;
                font-size:14px;
            }

            button:hover{
                background-color:white;
                border:1px solid purple;
                font-size: 16px;
                /* width:28vw; */
            }

            @media screen and (max-width: 950px){
           
                .inner {
                    padding: 166px 78px 93px 61px;
            }
        }

        a{
            text-decoration: none;
        }
          

        </style>
    </head>
    <body>
        <div class="outer">
            <div class="inner">



                 <h1 style="padding-left:127px;">Welcome </h1>
                 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                <button> <a href="{{ route('product.index')}}"> Product Listing </a> </button><br><br>
                <button><a href="{{ route('product.create')}}">Add Product</button><br><br>
               
            </div>
        </div>
    </body>
</html>
