<?php include 'header.php'?>
<!-- Add Post -->
<div class="addPost-content">
    <h2>Add Post</h2>
    <div class="addPost">
        <div class="addPost-left-content">
            <div class="user-img">
                <img src="img/Icon-user.png">
            </div>
            <div class="user-name">
                <input type="name" placeholder="User Name"/>
            </div>
            <select>
                <option value="Category">Select Category</option>
                <option value="saab">Real Estate</option>
                <option value="mercedes">Technology</option>
                <option value="audi">SEO</option>
            </select>

        </div>
        <div class="addPost-right-content">
            <div class="post-title">
                <input type="name" placeholder="Post Title">
            </div>
            <form>
                            <textarea name="editor1" id="editor1">
                             </textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
            </form>
            <div class="addPost-submit">
                <input type="button" value="Post">
            </div>
        </div>

    </div>
</div>
</div>
<!--End of Add Post -->
<?php include 'footer.php'?>