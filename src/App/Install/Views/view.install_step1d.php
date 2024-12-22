<div class="step2a">
    <div class="app-install-createFirstSettings">
        <p>Please adjust your site settings.</p>
        <form method="post">
            <div class="col-md-12 my-5">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputSiteUrl">Site url</label>
                            <input type="url" class="form-control" id="inputSiteUrl" value="<?php echo $app->url; ?>" />
                            <small id="siteUrlHelp" class="form-text text-muted">Please enter your site's full address here. Example: <code>https://example.com</code></small>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" id="inputUsername" />
                            <small id="UsernameHelp" class="form-text text-muted">Set admin username.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassworde" />
                            <small id="PasswordHelp" class="form-text text-muted">Enter admin password.</small>
                        </div>
                        <p>Save your username and password.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputDbName">Database name</label>
                            <input type="text" class="form-control" id="inputDbName" />
                            <small id="DbNameHelp" class="form-text text-muted">The name of the database you created.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputDbUser">Database username</label>
                            <input type="text" class="form-control" id="inputDbUser" />
                            <small id="DbUserHelp" class="form-text text-muted">The username of the database you created.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputDbUserPassword">Database user password</label>
                            <input type="text" class="form-control" id="inputDbUserPassword" />
                            <small id="DbUserPasswordHelp" class="form-text text-muted">The user password of the database you created.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputDbAdapter">Database adapter</label>
                            <select class="custom-select" name="DbAdapter">
                                <option value="1">MySQL/MySQLi</option>
                                <option value="2">SQLite</option>
                                <option value="3">SQLite3</option>
                                <option value="4">PGSql</option>
                                <option value="5">SqlSrv</option>
                            </select>
                            <small id="DbAdapterHelp" class="form-text text-muted">Selected db adapter. <code>MySQL recommended</code></small>
                        </div>
                        <div class="form-group">
                            <label for="inputDbPort">Database port</label>
                            <input type="text" class="form-control" id="inputDbPort" value="3306" />
                            <small id="DbPortHelp" class="form-text text-muted">Database port. <code>If you are on MySQL default port is 3306</code></small>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>