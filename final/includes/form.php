<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
        <span class="error"><?php echo $first_name_Err;?></span>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
        <span class="error"><?php echo $last_name_Err;?></span>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="error"><?php echo $email_Err;?></span>

        <label for="reason">What email updates are you interested in?</label>
        <ul>
        <li><input type="radio" id="reason" name="reason" value="recipes" <?php if(isset($_POST['reason']) && $_POST['reason'] == 'recipes') echo 'checked="checked"';?>> recipes</li>
        <li><input type="radio" name="reason" value="identification tips" <?php if(isset($_POST['reason']) && $_POST['reason'] == 'identification tips') echo 'checked="checked"';?>> identification tips</li>
        <li><input type="radio" name="reason" value="new_products" <?php if(isset($_POST['reason']) && $_POST['reason'] == 'new_products') echo 'checked="checked"';?>> new products</li>
        </ul>
        <span class="error"><?php echo $reason_Err;?></span>


        <label for="mushrooms">Favorite wild mushrooms:</label>
        <ul>
        <li><input type="checkbox" id="mushrooms" name="mushrooms[]" value="morel" <?php if(isset($_POST['mushrooms']) && in_array('morel',$mushrooms)) echo 'checked="checked"';?>> Morel</li>
        <li><input type="checkbox" name="mushrooms[]" value="chanterelle" <?php if(isset($_POST['mushrooms']) && in_array('chanterelle',$mushrooms)) echo 'checked="checked"';?>> Chanterelle</li>
        <li><input type="checkbox" name="mushrooms[]" value="porcini" <?php if(isset($_POST['mushrooms']) && in_array('porcini',$mushrooms)) echo 'checked="checked"';?>> Porcini</li>
        <li><input type="checkbox" name="mushrooms[]" value="oyster" <?php if(isset($_POST['mushrooms']) && in_array('oyster',$mushrooms)) echo 'checked="checked"';?>> Oyster</li>
        <li><input type="checkbox" name="mushrooms[]" value="lobster" <?php if(isset($_POST['mushrooms']) && in_array('lobster',$mushrooms)) echo 'checked="checked"';?>> Lobster</li>
        </ul>
        <span class="error"><?php echo $mushrooms_Err;?></span>

        <label for="locale">Where do you live?</label>
        <select name="locale" id="locale">
        <option value="" <?php if(isset($_POST['locale']) && $_POST['locale'] == NULL) echo 'selected="unselected"';?>>Select One!</option>
        <option value="pnw" <?php if(isset($_POST['locale']) && $_POST['locale'] == 'pnw') echo 'selected="unselected"';?>> PNW</option>
        <option value="europe" <?php if(isset($_POST['locale']) && $_POST['locale'] == 'europe') echo 'selected="unselected"';?>> Europe</option>
        <option value="latinamerica" <?php if(isset($_POST['locale']) && $_POST['locale'] == 'latinamerica') echo 'selected="unselected"';?>> Latin America</option>
        <option value="other" <?php if(isset($_POST['locale']) && $_POST['locale'] == 'other') echo 'selected="unselected"';?>> Other</option>
        </select>
        <span class="error"><?php echo $locale_Err;?></span>

        <label for="comments">Comments:</label>
        <textarea name="comments" id="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
        <span class="error"><?php echo $comments_Err;?></span>


        <input type="submit" value="Send it">
        <p><a href="">Reset</a></p>

        </fieldset>
</form>       