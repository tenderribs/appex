<div class="card rounded">
    <div class="card-content has-text-centered">
        <span class="box-title">
            <p style="font-size: 150%;">Add or remove Blogposts</p>
            </br>
        </span>
        <div class="content">
            <form action="controllers/auth/auth.php?method=edit" method="post">

                <!-- <p style="text-align: left;">Upload a file such as an image below to spice up the blog post:</p>
                <div class="file has-name">
                    <label class="file-label">
                        <input class="file-input" id="fileName" type="file" name="file">
                            <span class="file-cta">                                
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Choose a file…
                                </span>
                                <span class="file-name" id="fileNameTarget">
                                </span>
                            </span>
                    </label>
                </div> -->
                
                <br>                
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input is-info" type="text" name="title" placeholder="Enter the title please">    
                        <span class="icon is-small is-left">
                                <i class="fas fa-align-left"></i>
                        </span>
                    </p>
                </div>
                <div class="field" rows="10">
                    <p class="control has-icons-left">
                        <textarea class="textarea is-info" type="text" name="text" rows="10" placeholder="Enter the main text of the post"></textarea>                        
                    </p>
                </div>
                <div class="field">
                    <p class="control ">
                        <button class="button is-success" type="submit">
                            <span class="icon is-small">
                                <i class="fa fa-plus"></i>                        
                            </span>
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- trying to display the filename in the upload box, will finish this some other day
<script>
    document.addEventListener('DOMContentLoaded',function() {
    document.querySelector('input[id="fileName"]').onchange=changeEventHandler;
},false);
    function selectFile(){
        var fileName = document.getElementById("fileName");
        document.getElementById("fileNameTarget").innerHTML = filename;
    }
</script> -->