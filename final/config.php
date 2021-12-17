<?php //config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

// initialize variables
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have sucessfully logged on!';
$errors = array();

// navigation
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['switch.php'] = 'Switch';
$nav['products.php'] = 'Products';
$nav['contact.php'] = 'Contact';


// create a functino for our navigation, so the function is called out on our header.php page

function my_nav($nav){
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return.='<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        } else {
            $my_return.='<li><a href="'.$key.'">'.$value.'</a></li>';
        }//end else
    }//end for each
    return $my_return;
}// close nav function

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Home page of our final website';
    $body = 'home';
    $headline = 'Welcome to Sporadic Mushrooms';
    break;

    case 'about.php':
    $title = 'About page of final website';
    $body = 'about inner';
    $headline = 'Welcome to our about page';
    break;

    case 'switch.php':
    $title = 'Switch page of final website';
    $body = 'daily inner';
    $headline = 'Daily Featured Wild Mushroom Recipe';
    break;

    case 'products.php':
    $title = 'Product page of final website';
    $body = 'product inner';
    $headline = 'Welcome to my product page of final website';
    break;

    case 'product-view.php':
    $title = 'Product view page final website';
    $body = 'product-view inner';
    $headline = 'Welcome to my product view page of final website';
    break;

    case 'contact.php':
    $title = 'Contact page of final website';
    $body = 'contact inner';
    $headline = 'Connect with us..';
    break;

    case 'thx.php':
    $title = 'Thank you page';
    $body = 'thanks';
    $headline = 'Thank you for filling out the form!';
    break;

    case 'login.php':
    $title = 'Login page';
    $body = '';
    $headline = '';
    break;

    case 'register.php':
    $title = 'Register page';
    $body = '';
    $headline = '';
    break;
}

// switch
if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch($today) {

    case 'Sunday' :
        //$color = '<body style="background-color: whitesmoke"></body>';
        $recipe_name = 'Morels in Cream';
        $pic = 'morelsCream.jpg';
        $alt = 'Morels in Cream';
        $ingredients = '<ul><li>1lb fresh Morel Mushrooms</li>
        <li>2 tbs unsalted butter</li>
        <li>1 shallot, finely chopped</li>
        <li>Salt & freshly ground black pepper</li>
        <li>1 tsp fresh thyme leaves</li>
        <li>1 tbs fresh lemon juice</li>
        <li>Splash dry Sherry or Madeira</li>
        <li>1 cup heavy cream</li>
        <li>Puff pastry vol-au-vents, or toasted brioche, for serving</li>
        </ul>';
        $instructions = '<ul>
        <li>Thoroughly clean then trim morels. If large, cut in half.</li>
        <li>Melt butter in a large skillet over medium heat; add shallots and cook until just translucent. Add morels, gently turning to coat in shallot/butter mixture; season with salt and pepper.</li>
        <li>Saute mushrooms for about 7 minutes, then stir in thyme leaves and lemon juice. Raise heat to medium-high. When lemon juice has evaporated, add sherry if using. Cook until sherry has evaporated.</li>
        <li>Turn heat back down to medium and stir in cream. Cook until mixture is thickened. Taste for seasoning and add salt, if needed. Pour hot mushroom mixture over puff pastry cups or toasted brioche. Serve immediately.</li>
        </ul>';
        break;
    
    case 'Monday' :
        //$color = '<body style="background-color: darkbrown"></body>';
        $recipe_name = 'Chicken of the Woods Salad';
        $pic = 'chickenofwoodsSalad.jpg';
        $alt = 'Chicken of the woods salad';
        $ingredients = '<ul>
        <li>1/4 cup asparagus chopped into 1 inch pieces</li>
        <li>1/4 cup fiddlehead ferns blanched in boiling salted water, and then shocked in ice water before adding to the pan</li>
        <li>1/2 cup young chicken of the woods mushrooms trimmed of any tough end, then leaves sliced into 1/2 inch slices</li>
        <li>1/4 cup english peas you can use frozen-if you do, don\'t add them until right at the end or they will turn brown</li>
        <li>1 cup cleaned wild greens like pigweed or ramp leaves lightly packed</li>
        <li>2 tbsp sliced or chopped ramp bulbs</li>
        <li>1 tsp picked chive blossoms to garnish</li>
        <li>A nice squeeze of fresh lemon at the end</li>
        <li>kosher salt and fresh ground pepper</li>
        <li>2 tbsp flavorless oil for sauteing</li>      
        </ul>';
        $instructions = '<ul>
        <li>Heat the oil in a wide saute pan or cast iron skillet on medium heat with the ramps and cook until they sizzle for a minute, add the chicken mushrooms and season with a pinch of salt and cook for a minute more.</li>
        <li>Next add the asparagus, peas, and fiddleheads, and cook on medium heat for 2-3 minutes.</li>
        <li>Next add the greens and cook until they are wilted. I like to put a lid on the pan to wilt them quickly.</li>
        <li>When the greens are wilted, check the asparagus to see if it is as tender as you like, then finally check the seasoning and balance things out with salt and pepper if needed.</li>
        <li>Arrange the food on two  warmed plates, sprinkle with the chive blossoms and a squeeze of lemon. Serve immediately.</li>
        </ul>';
        break;
    
    case 'Tuesday' :
        //$color = '<body style="background-color: goldenrod"></body>';
        $recipe_name = 'Hedgehog Meatloaf';
        $pic = 'hedgehogMeatloaf.jpg';
        $alt = 'Hedgehog Meatloaf';
        $ingredients = '<ul>
        <li>1 lb ground pork shoulder or whatever ground meat you have</li>
        <li>½ cup breadcrumbs</li>
        <li>1/4 cup heavy cream</li>
        <li>1 teaspoon kosher salt</li>
        <li>¼ cup dried powdered mushrooms such as chanterelles</li>
        <li>1 large egg</li>
        <li>1 small clove garlic grated</li>
        <li>1 oz yellow onion minced</li>
        <li>2 teaspoons chopped fresh thyme or to taste</li>
        <li>2 teaspoons cooking oil</li>
        <li>Small piece of cold unsalted butter for rubbing on the cheesecloth</li>
        <li>Braise</li>
        <li>Pinch of crushed red pepper</li>
        <li>8 oz hedgehog Mushrooms</li>
        <li>1 Tablespoon paprika sweet or spicy not smoked</li>
        <li>2 oz minced shallot</li>
        <li>1 large clove garlic grated</li>
        <li>1 cup dry white wine</li>
        <li>4 cups stock</li>
        <li>Finishing</li>
        <li>2 T duck fat or equivalent</li>
        <li>1 tablespoon butter mashed to a paste with a Tablespoon of flour</li>
        <li>Dash of fresh lemon juice to taste</li>
        <li>Fresh cut chives to garnish (optional)</li>
        </ul>';
        $instructions = '<ul>
        <li>Heat the cream until steaming, then pour it over the dried mushrooms, salt and breadcrumbs in a bowl, mash to a paste with a fork and cool to room temperature. In a small pan, sweat the garlic and onion in the oil for a minute or two, just to take the edge off them, then add to the bread paste.</li>
        <li>Combine bread paste, egg, onion mix, and meat in a stand mixer with the paddle attachment and blend well on low speed.</li>
        <li>Cook a small piece of the meatloaf to test the seasoning for salt and herbs, adjust as needed, then scrape the mix out onto the middle of a large square of cheesecloth about 2-3 times the length and width of the torchon the center of which you’ve rubbed with a piece of butter (this prevents it from sticking to the meat).</li>
        <li>Roll the meat gently into a chubby log, twisting the ends of the cheesecloth in opposite directions to help compress the mixture into a firm log. Tie the ends closed. The meat log should be tied very tight. If at all possible, allow the meat loaf mix to rest overnight which will deepen the flavor.</li>
        <li>Braising the meatloaf</li>
        <li>To cook the meat log, sweat the onion and garlic in the duck fat, then add the paprika and a pinch of salt and stir, gently cooking and toasting the paprika in the oil. Add the wine, cook for a minute, then add the stock and lower in the torchon. Add the mushrooms.
        It’s ok if the meatloaf isn’t completely covered, just remember to turn it over a few times as it simmers. Bring to a simmer and cook on low heat, covered for 1.5 hours, then cool and chill overnight to firm and make slicing easier.</li>
        <li>Finishing and serving</li>
        <li>Remove the torchon and cut into thick slices. Reheat the jus and mushrooms, adding the paste of flour and butter, breaking it up with a fork, and reduce until thickened.</li>
        <li>Double check the seasoning of the sauce and adjust as needed. Reheat the slices of meatloaf in the sauce (or in the oven if your pan doesn’t allow) add a dash of lemon juice to the sauce just before serving to brighten the flavor.
        Lay a slice of meatloaf on each preheated dinner plate, spoon the sauce over, garnish with chives and serve.</li>
        </ul>';
        break;
    
    case 'Wednesday' :
        //$color = '<body style="background-color: tan"></body>';
        $recipe_name = 'Marinated Honey Mushrooms';
        $pic = 'honeyMushrooms.jpg';
        $alt = 'Honey Mushrooms';
        $ingredients = '<ul>
        <li>10 oz fresh honey mushrooms preferably unopened buttons, stems trimmed down to 1 inch or less remaining</li>
        <li>½ teaspoon kosher salt plus more to taste</li>
        <li>1 medium 5 g clove of garlic, grated on a mandoline</li>
        <li>1 small 15 g shallot, diced as small as possible or minced</li>
        <li>10 cracks of the peppermill</li>
        <li>1 small lemon</li>
        <li>2-3 Tablespoons fresh lemon juice or your favorite vinegar or more to taste</li>
        <li>¼ cup Smude’s sunflower oil</li>
        <li>Crushed red pepper or other hot chili to taste</li>
        <li>Fresh chopped dill or your favorite soft herb like oregano, mint, etc basil, mint, etc, to taste, about 1-2 tablespoons</li>
        </ul>';
        $instructions = '<ul>
        <li>Bring 3 quarts of water with 1 tablespoon kosher salt to a vigorous, rolling boil in a large stock pot that can accommodate the mushrooms and water without boiling over. Add the honey mushrooms, cover the pot, wait for the pot to come back to a boil, put the lid on, set a timer for ten minutes, keeping the pot at a rolling boil the whole time. Drain the mushrooms in a colander and allow to cool, then rinse.</li>
        <li>Spread the mushrooms on paper towels or a cloth and press on them a bit to remove excess water.</li>
        <li>Combine the mushrooms in a bowl with the remaining ingredients, zesting about half the lemon, and peeling 8-10 strips as thin as possible and cutting them into julienne (optional). Double check the seasoning for salt, acid and spiciness, adjust until it tastes good to you, then refrigerate.</li>
        <li>The mushrooms will improve in flavor over time, and will last for a week or so.</li>
        </ul>';
        break;
    
    case 'Thursday' :
        //$color = '<body style="background-color: orange"></body>';
        $recipe_name = 'Wild Mushroom Chowder';
        $pic = 'wildMushroomChowder.jpg';
        $alt = 'mushroom chowder';
        $ingredients = '<ul>
        <li>6 oz bacon (optional) sliced into ½ inch strips</li>
        <li>½ cup all purpose flour</li>
        <li>12 oz fresh wild or cultivated mushrooms *see note</li>
        <li>8 oz russet potatoes diced ½ inch (2 cups)</li>
        <li>3 oz 3/4 cup diced carrot</li>
        <li>4 oz 1 small finely chopped onion</li>
        <li>4 oz 2 ribs celery, trimmed and diced ½ inch</li>
        <li>½ cup dry white wine</li>
        <li>1 teaspoon dried thyme</li>
        <li>2 dried bay leaves</li>
        <li>5 cups light colored chicken or vegetable stock</li>
        <li>1 cup heavy cream</li>
        <li>Fresh chopped herbs especially chives, dill, or tarragon</li>
        <li>Wedges of fresh lemon</li>
        </ul>';
        $instructions = '<ul>
        <li>Render the bacon on medium heat in the soup pot you will cook the chowder in. While the bacon renders, chop the vegetables and mushrooms.</li>
        <li>When the bacon has given up most of it’s fat, drain off the fat into a small mixing bowl and reserve. Cool the fat for a few minutes, then stir in the flour and reserve, it should make a loose paste.</li>
        <li>Add all the soup ingredients except the cream to the pot with the bacon, cover, bring to a simmer, turn the heat to low and cook for 20 minutes, or until the vegetables are tender.</li>
        <li>When the vegetables are tender, scrape the flour paste into the soup, whisk briskly, and simmer until thickened and you can see the flour has activated. Thickening soup this way is called using a “beurre manie”.</li>
        <li>Add the cream to the chowder, mix to combine and heat through. Do not boil it.</li>
        <li>Finally, double check the seasoning one last time, adjust as needed, and serve, garnished with the herbs and lemon wedges on the side.</li>
        </ul>';
        break;
    
    case 'Friday' :
        //$color = '<body style="background-color: lightskyblue"></body>';
        $recipe_name = 'Candy Cap Tres Leches';
        $pic = 'candycapTresleches.jpg';
        $alt = 'candy cap tres leches';
        $ingredients = '<ul>
        <li>2 cups flour</li>
        <li>1 Cup sugar</li>
        <li>7 large eggs</li>
        <li>1 heaping tablespoon baking powder</li>
        <li>½ cup half and half</li>
        <li>2 teaspoons good vanilla extract</li>
        <li>10 cups candy cap tres leches milk recipe follows</li>
        <li>Candy Cap Tres Leches Milk</li>
        <li>3 cups evaporated milk</li>
        <li>3 cups sweetened condensed milk</li>
        <li>2 cups cream</li>
        <li>2 cups half and half</li>
        <li>1 cup whole milk</li>
        <li> 10 grams dried candy caps roughly 2 tablespoons, or add them to taste</li>
        </ul>';
        $instructions = '<ul>
        <li>Grind the candy caps in a spice grinder, then sift and grind again. Whisk together all the milks and the dried candy caps in a pot, warm it until steaming hot, then cool. The milk should taste strongly of candy caps. Refrigerate the milk overnight to infuse.</li>
        <li>Strain the milk and discard the mushrooms, or just let them settle and only pour off the milk from the top. Since the milk will be used to saturate the cake, leaving the mushrooms in it will mean they could end up on top of the cake after it soaks, which is a little unsightly. Reserve 1.5 cups of the milk for garnishing finished slices of the cake.</li>
        <li>Cake</li>
        <li>Preheat the oven to 375. In a stand mixer, whip the eggs and sugar with the whisk attachment for 12 minutes on high until tripled in volume and fluffy. Set a timer, this part is important as it brings the eggs to room temperature and helps it rise properly.</li>
        <li>Meanwhile, stir together the flour and baking powder.</li>
        <li>Mix the half and half with the vanilla.</li>
        <li>Put the half and half into the mixing bowl with the whipped eggs and mix for 1 minute more, then add the flour and mix with the whisk for another 2 minutes on medium speed until completely combined and uniform.
        The final whisking is very important, if you don’t mix it long enough, the gluten strands won’t activate and the cake won’t rise properly.
        Spray a pan with non-stick spray, then pour in the mixture and put in the oven. Do not open the door while the cake is cooking.</li>
        <li>Cook for 35 minutes or until just cooked throughout.</li>
        <li>Soaking the cake</li>
        <li>Remove from the oven and immediately begin pouring over the remaining 8 or so cups of tres leches milk mixture onto the cake, a few cups at a time, waiting for the cake to absorb the dairy before adding more. When all the dairy has been absorbed, cool, then wrap in plastic and reserve until needed.</li>
        <li>Save the extra candy cap milk for garnishing finished plates. Allow the cake to saturate for at least an hour before serving. The cake will keep for 4 days in the fridge.*</li>
        <li>Serve with whipped cream, fresh fruit like blueberries, raspberries or peaches, and extra spoonfuls of the reserved candy cap milk.</li>
        
        </ul>';
        break;
    
    case 'Saturday' :
        //$color = '<body style="background-color: burlywood"></body>';
        $recipe_name = 'Puffball and Squash Gratin';
        $pic = 'puffballGratin.jpg';
        $alt = 'puffball gratin';
        $ingredients = '<ul>
        <li>1 lb cooked puffball slices *see note</li>
        <li>1 medium sized butternut squash</li>
        <li>Kosher salt and fresh ground black pepper</li>
        <li>3/4 cup (6oz) soft fresh goat chevre, crumbled If you love goat cheese, you can add more.</li>
        <li>1.5 tablespoons chopped fresh thyme</li>
        <li>Bechamel</li>
        <li>2.25 cups milk</li>
        <li>Splash of dry white wine</li>
        <li>4 tablespoons unsalted butter</li>
        <li>¼ cup all purpose flour</li>
        <li>Fresh grated nutmeg to taste</li>
        <li>1/2 teaspoon kosher salt</li>
        <li>For finishing</li>
        <li>½ cup toasted panko breadcrumbs</li>
        <li> ½ stick unsalted butter</li>
        </ul>';
        $instructions = '<ul>
        <li>Melt the butter and flour in a small sauce pot until foaming, whisking occasionally. Add a splash of white wine and the salt and cook for 1 minute, then add the milk, ½ cup at a time, whisking constantly between additions to prevent lumps until it’s incorporated.</li>
        <li>When all the milk is added, the mixture should be thick and bubbling. Remove it from the heat and cover to prevent it forming a skin, season to taste with fresh grated nutmeg and reserve until needed.</li>
        <li>Squash</li>
        <li>Peel the squash (you will want a Kuhn Rikon peeler for this), then cut the seedless part in half the long way and slice on a mandoline into 1/8th thick half moons.</li>
        <li>Puffballs</li>
        <li>Cut the puffball into 1 inch slices, then grill on both sides on a hot griddle brushed with butter, seasoning them lightly with salt and pepper as they cook on both sides. Set the puffballs aside on a tray, laying each slice on top of one another, until cooled. When cool, press the puffball slices firmly between a layer or two of paper towels to help remove water. Reserve the puffballs until needed.</li>
        <li>Building the gratin</li>
        <li>Spread the bottom of a spring form pan with ¼ cup of the bechamel, then put down a layer of squash. Season the squash lightly with salt, some of the chevre, and fresh thyme.</li>
        <li> Next, put on a layer of cooked puffball slices, seasoning lightly with salt and pepper, and pressing it down firmly, then repeat with the chevre, thyme, and bechamel.
        Go easy on the salt, but don’t forget it. Repeat this process two more times, so that you have two layers of squash and puffball, then, finally top with a layer of squash, spread it with bechamel, and bake at 350 F for 1 hour. Allow the torte to cool, then put a flat plate on it, top with a weight, and refrigerate overnight to help it set and compress it.</li>
        
        </ul>';
        break;
    
    }

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

//emailable form php

$first_name = '';
$last_name = '';
$email = '';
$reason = '';
$mushrooms = '';
$locale = '';
$comments = '';


$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$reason_Err = '';
$mushrooms_Err = '';
$locale_Err = '';
$comments_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['first_name'])) {
        $first_name_Err = 'Please fill out your first name';
    }else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your last name';
    }else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please fill out your email name';
    }else {
        $email = $_POST['email'];
    }

    if(empty($_POST['reason'])) {
        $reason_Err = 'Please select your experience level';
    }else {
        $reason = $_POST['reason'];
    }

    if(empty($_POST['mushrooms'])) {
        $mushrooms_Err = 'Please select your favorite mushrooms';
    }else {
        $mushrooms = $_POST['mushrooms'];
    }

    if($_POST['locale'] == NULL) {
        $locale_Err = 'Please select your primary use';
    }else {
        $locale = $_POST['locale'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please share your commments with us.';
    }else {
        $comments = $_POST['comments'];
    }


    // the logic is if post mushrooms IS NOT empty, then, 
    // we need to grab the mushrooms adn display the, just like we did in our implode.php

    function my_mushrooms() {
        $my_return = '';
        if(!empty($_POST['mushrooms'])) {
            $my_return = implode(', ', $_POST['mushrooms']);
        }
        return $my_return;
    } //close mushroom function

   
    if(isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['reason'],
        $_POST['mushrooms'],
        $_POST['locale'],
        $_POST['comments']
    )){
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email' .date('m/d/y') ;
        $body = '
        First name: '.$first_name.''.PHP_EOL.'
        Last name: '.$last_name.''.PHP_EOL.'
        Email: '.$email.''.PHP_EOL.'
        Reason: '.$reason.''.PHP_EOL.'
        Primary locale: '.$locale.''.PHP_EOL.'
        Favorite wild mushrooms: '.my_mushrooms().''.PHP_EOL.'
        Comments: '.$comments.''.PHP_EOL.'
        ';

        $headers = array(
            'from' => 'noreply@mystudentswa.com',
            'Reply-to' => ''.$email.''

        );
        
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
    }

}//end server request
?>