<html>
    <head>
        <title>Product form</title>

    </head>
    
    <body>
        <center>
        <form method="post" action="{{route('product.show',$product->id)}}">
            @csrf
            @method('PATCH')
        <h1 class="e">Product Form</h1>
        <lable>Enter Name</lable>
        <input type="text" name="name" value="{{$product->name}}"><br><br>
        <lable>Enter Title</lable>
        <input type="text" name="title" value="{{$product->title}}"><br><br>
        <lable>Enter Material</lable>
        <input type="text" name="material" value="{{$product->material}}"><br><br>
        <lable>Enter Quantity</lable>
        <input type="text" name="quantity" value="{{$product->quantity}}" ><br><br>
        <lable>Enter USE</lable>
        <input type="text" name="use" value="{{$product->use}}"><br><br>
        <lable>Enter Size</lable>
        <input type="text" name="size" value="{{$product->size}}"><br><br>
        <lable>Enter GMS</lable>
        <input type="text" name="gms"value="{{$product->gms}}" ><br><br>
        <lable>Enter Color</lable>
        <input type="text" name="color" value="{{$product->color}}"><br><br>
        <input type="submit">
        </form>
</center>
    </body>
</html>