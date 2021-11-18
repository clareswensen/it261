<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
        <span class="error"><?php echo $first_name_Err;?></span>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
        <span class="error"><?php echo $last_name_Err;?></span>

        <label for="email">Email</label>
        <input type="email" name="email"value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="error"><?php echo $email_Err;?></span>

        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx"  value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
        <span class="error"><?php echo $phone_Err;?></span>

        <label for="exp_level">Please select your experience level:</label>
        <ul>
        <li><input type="radio" name="exp_level" value="novice" <?php if(isset($_POST['exp_level']) && $_POST['exp_level'] == 'novice') echo 'checked="checked"';?>>Novice</li>
        <li><input type="radio" name="exp_level" value="intermediate" <?php if(isset($_POST['exp_level']) && $_POST['exp_level'] == 'intermediate') echo 'checked="checked"';?>>Intermediate</li>
        <li><input type="radio" name="exp_level" value="expert" <?php if(isset($_POST['exp_level']) && $_POST['exp_level'] == 'expert') echo 'checked="checked"';?>>Expert</li>
        </ul>
        <span class="error"><?php echo $exp_level_Err;?></span>


        <label for="mushrooms">Favorite wild mushrooms:</label>
        <ul>
        <li><input type="checkbox" name="mushrooms[]" value="morel" <?php if(isset($_POST['mushrooms']) && in_array('morel',$mushrooms)) echo 'checked="checked"';?>>Morel</li>
        <li><input type="checkbox" name="mushrooms[]" value="chanterelle" <?php if(isset($_POST['mushrooms']) && in_array('chanterelle',$mushrooms)) echo 'checked="checked"';?>>Chanterelle</li>
        <li><input type="checkbox" name="mushrooms[]" value="porcini" <?php if(isset($_POST['mushrooms']) && in_array('porcini',$mushrooms)) echo 'checked="checked"';?>>Porcini</li>
        <li><input type="checkbox" name="mushrooms[]" value="oyster" <?php if(isset($_POST['mushrooms']) && in_array('oyster',$mushrooms)) echo 'checked="checked"';?>>Oyster</li>
        <li><input type="checkbox" name="mushrooms[]" value="lobster" <?php if(isset($_POST['mushrooms']) && in_array('lobster',$mushrooms)) echo 'checked="checked"';?>>Lobster</li>
        </ul>
        <span class="error"><?php echo $mushrooms_Err;?></span>

        <label for="uses">Primary Use for mushrooms:</label>
        <select name="uses">
        <option value=""NULL <?php if(isset($_POST['uses']) && $_POST['uses'] == NULL) echo 'selected="unselected"';?>>Select One!</option>
        <option value="medicinal" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'medicinal') echo 'selected="unselected"';?>>Medicinal</option>
        <option value="culinary" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'culinary') echo 'selected="unselected"';?>>Culinary</option>
        <option value="recreational" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'recreational') echo 'selected="unselected"';?>>Recreational</option>
        <option value="environmental" <?php if(isset($_POST['uses']) && $_POST['uses'] == 'environmental') echo 'selected="unselected"';?>>Environmental</option>
        </select>
        <span class="error"><?php echo $uses_Err;?></span>

        <label for="comments"></label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
        <span class="error"><?php echo $comments_Err;?></span>

        <label for="privacy">Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"';?>>I agree</li>
            </ul>
            <span class="error"><?php echo $privacy_Err;?></span>

        <input type="submit" value="Send it">
        <p><a href="">Reset</a></p>

        </fieldset>
</form>       