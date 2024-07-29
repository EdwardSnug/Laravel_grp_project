<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, width=device-width" />
        
        <title> My Listings</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mycss.css') }}" >
    </head>
    <body>
        <form class="my-form" method="post" action="{{route('todolist.store')}}">
        @csrf 
        @method('post')
            <div class = "form-group">
                <label>Input Title:</label>
                <input type="text" name="inputTitle" placeholder="Enter your Task title" required>
            </div>
            <div class = "form-group">
                <label>Task:</label>
                <input type="text" name="task" placeholder="Enter your title" required>
            </div>
            <div class = "form-group">
                <label>Description:</label>
                <textarea name="description" placeholder="Enter your description"></textarea>
            </div>
            <div class = "form-group">
                <div class="flex-container">
                    <div class="item">
                        <input class="button" type="submit" value="Done" name="">
                    </div>
                    <div class="item">
                        <button class="button" type="reset">Cancel</button>
                    </div>
                </div>
            </div>

        </form>
    </body>
    <footer id="my-footer">
        <p class="footnote">Copyright&copy;2024MyListings</p>
    </footer>
</html>