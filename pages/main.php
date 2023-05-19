<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require './pages/head.php';
    ?>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/styles/main.css">
    <script src="https://cdn.tiny.cloud/1/l2yspqfl2wh4h7ty77vetjc4f45m9m5172rulai1brhnxekj/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body>
    <section class="container">

        <nav class="navbar">
            <h1 class="nav-title">Code Lab.</h1>
            <ul class="nav-container">
                <li class="nav-item">
                    <i class="fi fi-rr-home"></i>
                    <p>Dashboard</p>
                </li>
                <li class="nav-item active">
                    <i class="fi fi-rr-edit"></i>
                    <p>Add|edit</p>
                </li>
            </ul>
        </nav>

        <main class="main-container">

            <nav class="main-navbar">

                <div class="burger-menu">
                    <i class="fi fi-rr-menu-burger"></i>
                </div>

                <div class="input-container">
                    <input type="text" class="search-input">
                    <i class="fi fi-rr-search search-icon"></i>
                </div>

                <div class="profile">
                    <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="profile">
                </div>

            </nav>

            <section class="main">
                <h1 class="main-title">
                    <i class="fi fi-rr-pencil title-icon"></i>
                    <p>Add|Edit</p>
                </h1>

                <form action="/post.php" method="post" class="form-container">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title">

                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price">

                    <label for="desc">Description:</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>


                    <input type="submit" class="btn-submit" value="Submit">
                </form>
            </section>
        </main>

    </section>



    <script>
        tinymce.init({
            selector: 'textarea',
            // plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            menubar:false
            
            // tinycomments_mode: 'embedded',
            // tinycomments_author: 'Author name',
            // mergetags_list: [
            //     { value: 'First.Name', title: 'First Name' },
            //     { value: 'Email', title: 'Email' },
            // ]
        });
    </script>
</body>

</html>