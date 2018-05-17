<div class="card rounded">
    <div class="card-content has-text-centered">
        <span class="box-title">
            <p style="font-size: 150%;">Add or remove Blogposts</p>
            </br>
        </span>
        <div class="content">
            <form action="blog.php" method="post">
                <div class="file">
                    <label class="file-label">
                        <input class="file-input" type="file" name="resume">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Choose a file…
                                </span>
                            </span>
                    </label>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input is-info" type="text" name="email" placeholder="Enter the content please">
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input is-info" type="password" name="password" placeholder="Enter Password">
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control ">
                        <button class="button is-success" type="submit">
                        Submit
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