-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 07:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinewineshop-ltw`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Whiskey', 'We could simply say that whiskey is a liquor that derives from a blend of fermented grains but, as most connoisseurs know, the world of spirits is much more complicated than that. Actually, the whiskey category includes a huge variety of spirits, from bourbon to scotch whisky. To create completely new flavors, distilleries constantly experiment with different grain types.\r\nFlavors can range from sweet to spicy and smoky. Most whiskeys were born as a standalone drink, but you can always choose your favorite mixers and invent your own cocktail recipes.\r\nWHY SOMETIMES IT\'S CALLED \"WHISKEY\" AND SOMETIMES \"WHISKY\"\r\nIf you\'re a fan of this elegant liquor, you\'ve probably already read both versions of the name on your bottles. Simply put, \"whisky\" without the \"e\" comes from distilleries in Scotland, Canada or Japan. If you\'re looking to try any of these whiskies, bottles will be labeled with \"scotch whisky,\" \"Canadian whisky\" or \"Japanese whisky.\" \"Whiskey\" with the \"e\" comes from Ireland and the United States.\r\nTypes Of Whiskey\r\nDid you know that bourbon is a type of aged whiskey? It ages for two years in brand-spanking-new oak barrels. It\'s not a joke as producers use bourbon barrels only once, then they pass them on to other distillers who use them for rums, tequilas and other liquors. Sounds like a pretty sustainable production method! Bourbon is the most popular type of whiskey in mixed drinks. After all, could you imagine a Manhattan or John Collins without it?\r\nScotch whisky, like the name suggests, hails from Scotland. A particular malt drying process imparts to the liquor a distinctive smoky taste, which is even stronger in single malt varieties.\r\nThen there\'s Irish whiskey, a complex blend of corn-based and malted spirits. It\'s a very drinkable variety with a smooth, toasty and typically sweet flavor.\r\nWhat are you waiting for? Find your favorite whiskey on Drizly in your city, or look for liquor stores on Drizly near you.\r\nWhat Is The Process Of Making Whiskey?\r\nWhiskey starts with a mash of grains. This can be corn, wheat, rye or malted barley. This is similar to the creation of other liquors, like vodka. The outcome of the drink (flavor, mouthfeel, spice etc.) will be determined by the dominant grain. The mash is fermented, distilled and aged (exception for white whiskey). It\'s then bottled. To be a whiskey, it technically has to be at least 40% ABV.', '0000-00-00 00:00:00', '2023-09-25 07:21:02'),
(2, 'Vodka', 'In theory, vodka should be tasteless and odorless. This is the reason why it mixes so well with many ingredients to create some of the top favorite classic vodka cocktails. However, the producers needed to make the spirit more palatable for the average drinker, so they introduced flavored vodka. Find varieties with any flavor you can imagine, from pineapple to cucumber and citrus. Notable vodka brands to consider for flavored vodka are Smirnoff, Cîroc, Grey Goose to name a few.\r\nThe introduction of flavored varieties played a big role in the popularity of the spirit in America, along with many marketing campaigns by certain brands in the 1950s and 1960s. Fruity vodkas are delicious on their own, but they can also add a particular twist to many vodka cocktail recipes. Unflavored vodka mixes with almost anything since it\'s virtually tasteless, and is ideal for creating Martinis, Bloody Marys and Cosmopolitans. If you\'re feeling like a mixologist, consider creating your own handmade infusions with an unflavored vodka.', '0000-00-00 00:00:00', '2023-09-25 07:22:15'),
(3, 'Gin', 'Gin is the key ingredient in many classic cocktails, but you can also serve some aged varieties on their own. This iconic spirit hails from around the world and comes in endless varieties. Its name comes from the French name of the juniper berry, \"genievre.\" Bartenders soon shortened the name to \"gin.\" Not surprising, given that the spirit\'s main ingredient is the juniper berry.\r\nWhen England allowed individuals to start making gin without a license, many members of the lower classes became drunkards and the government had to impose heavy taxes to discourage production and consumption of the spirit. Until the early 1900s, people rarely drank gin on its own, because it was clearly too strong.\r\nHowever, it was a popular choice for sophisticated, upscale cocktails. Legend says that Queen Elizabeth II loves one part gin and two parts Dubonnet.', '0000-00-00 00:00:00', '2023-09-25 07:22:34'),
(4, 'Tequila', 'Margaritas, tequila sunrises and La Palomas aren’t the same without a good bottle of tequila. Did you know there are many types of this iconic liquor?\r\nThere\'s a few kinds of tequila you need to know: silver tequila, gold tequila, reposado, añejo and extra añejo. “Plata” or “silver” blanco tequila is unaged, so it features the genuine flavors of the blue agave plant. Tequila brands you\'ve heard of that have popular silver tequila are Jose Cuervo and Casamigos. In case you didn’t know, blue agave is the main ingredient in tequila production. Joven tequila, as the name suggests, is young, or is a blend of blanco and aged tequila. Many liquor enthusiasts call it “gold tequila” because of its light brown color, derived from added flavors like caramel.\r\n For a liquor that ages in white oak or French oak barrels, go for reposado tequila. Most of the time, the producers choose barrels they already used for other spirits, to impart a complex flavor. Reposado varieties age for a minimum of two months and less than a year.\r\n“Old” or añejo tequila ages from one to three years, while the extra añejo liquors age for more than three years. They can have notes of flowers and vanilla.', '0000-00-00 00:00:00', '2023-09-25 07:23:17'),
(5, 'Brandy', 'Brandy, or sometimes known as brandewijn, originates from the distillation of wine. Distillers use a wide variety of wines to craft the spirit. So yes, brandy can, and often does, come from grapes. Besides grapes, distillers use other fruits ingredients like apricot, peach, apples, pear, cherry and plum, too. That\'s how they make fruit brandies (think: beloved favorites, apple brandy and peach brandy) with many different notes like applejack and French eau-de-vie.\r\nAfter the distilling process, the producers let brandy age in a wooden casket, so the liquor achieves its typical caramel color. At minimum, brandy needs to age for two years. If the producer chooses a casket they already used for other liquors, the spirit will have a more complex flavor. Most fruit brandies are unaged.', '0000-00-00 00:00:00', '2023-09-25 07:23:36'),
(6, 'Rum', 'History Of Rum\r\nBefore becoming the drink of choice of pirates, rum was born as a creative way to use up excess molasses, a byproduct of cane sugar, during Colonial times. The farmers learned that they could ferment and distill molasses to craft what would soon become one of the most popular liquors in the Caribbean. In particular, it became the favorite drink of sailors and, you guessed it, pirates. In some areas, this spirit also served as currency\r\nTypes Of Rum\r\nUnlike other spirits like bourbon or whiskey, rum is not subject to regulations. This means that distillers can create endless varieties by using different distillation techniques. The main varieties are white rum, dark rum and spiced rum. White rum ages very briefly and then undergoes a filtering process. It\'s clear, and its dry taste makes it a good choice for many cocktails. Dark rum ages for long periods of time, and you can sip it on its own thanks to its complex flavor profile. Spiced varieties result from the addition of different spices, which enhance the notes originated from barrel aging. There are also golden rums, which age for longer than white ones but are still a good choice for cocktails. Aromatic rums feature different added flavors like coconut, mango, lime and other tropical fruits.', '0000-00-00 00:00:00', '2023-09-25 07:23:56'),
(7, 'Red Wine', 'Red wine, with its full-bodied, robust flavor, complements most meals. Modern selections pair well with steak and burgers, as well as chicken, fish or pork. With interesting, flavorful choices, no longer does the thought of serving red wine with fish strike horror in the hearts of sommeliers worldwide. Select the proper variety to sip after dinner, or pair your choice with a hearty meal.\r\nFlavor Profiles\r\nVineyards around the world supply wineries with hundreds of varieties of grapes for red wine. However, the most common choices offer wine drinkers specific flavor profiles. For example, cabernet sauvignon, which comes from all over the world, includes notes of bell pepper, green olive, currant, cassis and black cherry. Merlot leans toward the lighter side with watermelon, strawberry, cherry and plum. Malbec, a blending wine, exudes flavors of chocolate, coffee, sour cherry and spice. Pinot noir offers hints of tomato leaf, pale cherry, beetroot, blackberry, plum and cola. As long as the wine tickles your palate, these and other varieties work for most meals or get-togethers.', '0000-00-00 00:00:00', '2023-09-25 07:32:25'),
(8, 'White Wine', 'When it comes to white wines, there are many varieties to choose from and all have different acidities, flavor profiles and tannin levels. Buckle up and get ready for a wild ride, because there are so many varieties that you might get whiplash.\r\nSWEET WHITE WINE VARIETALS\r\nRiesling wine is a fruity, sweet and crisp white that originates from Germany but is now grown throughout the world. These can be both sweet and dry, depending on where they\'re grown. Then, you have moscato, which is even sweeter than a riesling and is often used as a dessert wine.\r\nGewürztraminer: ginger, grapefruit\r\nMoscato: pear, honeysuckle, lemon\r\nRiesling: green apple, lime', '0000-00-00 00:00:00', '2023-09-25 07:32:29'),
(9, 'Pink Wine', 'These wines come in varieties ideal for holidays, special occasions or when enjoying a casual afternoon with family or friends. They offer flavors and aromas that appeal to the senses. Still or sparkling blushes, rosé wines and white zinfandel wines in pink shades that span from cantaloupe to almost purple liven things up without taking center stage. Their sweet, citrus essence sits well on the palate when the wine is enjoyed by itself or with brunch or during holiday feasts. If you\'re looking for a bottle of bubbly for a special occasion, sparkling rosé is an ideal option with its well-loved pink hue and fizz.', '0000-00-00 00:00:00', '2023-09-25 07:32:33'),
(10, 'Beer', 'There are almost as many beer styles as there are stars in the sky. For example, have you ever enjoyed an ale during a party with friends? If so, you\'re likely familiar with this beer style\'s full-bodied and malty taste. Ale beers can be pale, amber-colored or dark, based on the color of the malt. Let\'s not forget porter, a type of ale with dry and roasted flavors.\r\nIf you prefer a hoppier and more bitter taste, try India pale ales (IPAs), which feature notes of fruits, citrus and pine. American pale ales (APAs) are similar to IPAs, but they contain American hops.\r\nLager beers are crisper than ales, with a pleasantly light flavor that makes them easy to drink. Most lagers are pale, but you\'ll also find some dark varieties. They frequently have a lower alcohol content than ale, as well as a smoother taste.\r\nStout beers are dark and full-bodied, with a creamy texture. With dry stouts, sweet stouts and oatmeal stouts, there\'s a style to satisfy everyone\'s taste buds. For something different, consider cider, which comes from apples instead of malt. Hard ciders are on the lighter side in alcohol content but contain bubbles for a refreshing drink.', '0000-00-00 00:00:00', '2023-09-25 07:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `quantity`, `price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 10, 8.49, 1, 1, '2023-09-25 07:30:57', '2023-09-25 07:30:57'),
(2, 10, 9.5, 1, 7, '2023-09-25 07:30:57', '2023-09-25 07:30:57'),
(3, 10, 12.09, 1, 8, '2023-09-25 07:30:57', '2023-09-25 07:30:57'),
(4, 10, 8.99, 2, 9, '2023-09-25 07:31:46', '2023-09-25 07:31:46'),
(5, 10, 6.59, 3, 30, '2023-09-25 07:32:49', '2023-09-25 07:32:49'),
(6, 10, 7.59, 3, 31, '2023-09-25 07:32:49', '2023-09-25 07:32:49'),
(7, 1, 7.59, 4, 31, '2023-09-25 07:33:05', '2023-09-25 07:33:05'),
(8, 1, 6.59, 5, 30, '2023-09-25 07:33:19', '2023-09-25 07:33:19'),
(9, 1, 2.99, 5, 32, '2023-09-25 07:33:19', '2023-09-25 07:33:19'),
(10, 1, 7.59, 6, 31, '2023-09-25 07:33:27', '2023-09-25 07:33:27'),
(11, 1, 7.59, 7, 31, '2023-09-25 07:33:36', '2023-09-25 07:33:36'),
(12, 1, 8.49, 8, 1, '2023-09-25 07:33:49', '2023-09-25 07:33:49'),
(13, 20, 9.99, 9, 33, '2023-09-25 07:34:10', '2023-09-25 07:34:10'),
(14, 1, 9.5, 10, 7, '2023-09-25 07:36:09', '2023-09-25 07:36:09'),
(15, 4, 6.59, 11, 30, '2023-09-27 06:33:56', '2023-09-27 06:33:56'),
(16, 5, 8.49, 12, 1, '2023-09-27 18:47:21', '2023-09-27 18:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_24_040907_create_categories_table', 1),
(7, '2023_08_29_084321_alter_users_table', 1),
(8, '2023_09_14_073208_create_products_table', 1),
(9, '2023_09_14_075611_create_orders_table', 1),
(10, '2023_09_14_075824_create_items_table', 1),
(11, '2023_09_14_075905_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 300.8, 1, '2023-09-25 07:30:57', '2023-09-25 07:30:57'),
(2, 89.9, 1, '2023-09-25 07:31:46', '2023-09-25 07:31:46'),
(3, 141.8, 1, '2023-09-25 07:32:49', '2023-09-25 07:32:49'),
(4, 7.59, 1, '2023-09-25 07:33:05', '2023-09-25 07:33:05'),
(5, 9.58, 1, '2023-09-25 07:33:19', '2023-09-25 07:33:19'),
(6, 7.59, 1, '2023-09-25 07:33:27', '2023-09-25 07:33:27'),
(7, 7.59, 1, '2023-09-25 07:33:36', '2023-09-25 07:33:36'),
(8, 8.49, 1, '2023-09-25 07:33:49', '2023-09-25 07:33:49'),
(9, 199.8, 1, '2023-09-25 07:34:10', '2023-09-25 07:34:10'),
(10, 9.5, 1, '2023-09-25 07:36:09', '2023-09-25 07:36:09'),
(11, 26.36, 2, '2023-09-27 06:33:56', '2023-09-27 06:33:56'),
(12, 42.45, 1, '2023-09-27 18:47:21', '2023-09-27 18:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `region` varchar(255) NOT NULL,
  `abv` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `quantity`, `price`, `region`, `abv`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Jim Beam Bourbon Whiskey', 'Founded in 1795 and passed down through one family for the past seven generations, Jim Beam is the world\'s best-selling bourbon. From Tokyo to London to Louisville, Jim Beam sets the benchmark for what a bourbon should be, aged twice as long as required by law for a flavor that\'s unlike any other. Distilled with corn, malted barley, time, pride and passion, there\'s a reason why Jim Beam Bourbon is on almost every bar shelf. However, it isn\'t the name that should entice you. Opening a bottle is the best way to celebrate life events, gatherings, or just hanging out with friends. It\'s as versatile as it is smooth, something you\'ve probably always aspired to be, yet it does so effortlessly.\r\n\r\nTo get the distinct flavor of Jim Beam Bourbon, the distillery ages the liquor in charred oak barrels for a minimum of four years. This imparts a medium body and a caramel color that you\'ve come to know in a bourbon. The oaky, vanilla and spicy backdrop greets you with a swirling of the bourbon, inviting you to taste what lies within the glass. When you finally raise the glass, your taste buds become overwhelmed with a five-pronged attack of sweetness, grain, oak, char and fruit. Most five-pronged attacks are best left to the battlefield or sporting event, but this bludgeons you over the head with flavors that keep you coming back. Enjoy Jim Beam Bourbon on the rocks, with a splash of water or in one of your favorite cocktails.\r\nBeam Suntory', 'ci-jim-beam-bourbon-whiskey-63cd_6511921aad9c6.png', 940, 8.49, 'Kentucky, United States', '40', '0000-00-00 00:00:00', '2023-09-27 18:47:21', 1),
(2, 'Maker\'s Mark Bourbon Whisky', 'Never bitter or sharp, Maker\'s Mark is made with soft red winter wheat, instead of the usual rye, for a one-of-a-kind, full-flavored bourbon that\'s easy to drink. To ensure consistency, we rotate every barrel by hand and age our bourbon to taste, not time.', 'makers-mark_650ab98dc0b0d.png', 1000, 14.99, 'Kentucky, United States', '45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Bulleit Bourbon', 'Bulleit Bourbon is inspired by the whiskey that was pioneered over 150 years ago. Only ingredients of the very highest quality are used. The complexity of Bulleit Bourbon comes from its unique blend of rye, corn, and barley malt, along with special strains of yeast and pure Kentucky limestone-filtered water. Due to its especially high rye content, Bulleit Bourbon has a bold, spicy character with a finish that\'s distinctively clean and smooth. Medium amber in color, with gentle spiciness and sweet oak aromas, the mid-palate is smooth with tones of maple, oak, and nutmeg. The finish is long, dry, and satiny with a light-tasting toffee flavor that lingers long after the final sip. Simply combine our bourbon whiskey with cloves, lemon juice, brown sugar and hot water for a comforting Hot Toddy. Bulleit Bourbon earned a gold medal at the 2021 San Francisco World Spirits Competition. Includes one 90 proof 1 L bottle of Bourbon Whiskey. Please drink responsibly.Bulleit Rye: Long, satiny and woody with a hint of light toffee.\r\nBulleit Bourbon: Smooth with tones of maple, oak, and nutmeg.', 'bulleit-bourbon_650ab994dfd8f.png', 1000, 15.99, 'Kentucky, United States', '45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'Johnnie Walker Black Label Blended Scotch Whisky', 'Indulge all of your senses with a smooth glass of Johnnie Walker Black Label Blended Scotch Whisky. Created using only Scotch whiskies aged in oak casks for a minimum of 12 years from the four corners of Scotland, Johnnie Walker Black Label has an unmistakably smooth, deep, complex character. This spirit is an impressive blended Scotch whisky matured to perfection. The aromas of rich and tropical dark fruits and sweet vanilla melt into creamy toffee notes, resulting in a smooth warming smoke finish, a characteristic of all Johnnie Walker whiskies. Simply mix 1.5 oz. of Johnnie Walker Black Label Blended Scotch Whisky with 3-4 oz. of soda water, pour over ice and garnish with a lime wedge for a Highball cocktail. Johnnie Walker was recognized as one of the world\'s top-trending Scotch whiskies at the 2020 Drinks International awards. Includes one 80 proof 1 L bottle of Black Label Blended Scotch Whisky. Please drink responsibly.Nose: Take in the luxurious scent of rich and tropical dark fruits with hints of sweet vanilla.\r\nTaste: Savor the depth of flavor developed from maturation in oak casks, combined with creamy toffee notes that come from grain whiskies.\r\nFinish: This iconic whisky delivers a smooth and warming smoke finish, characteristic of all Johnnie Walker whiskies.', 'ci-johnnie-walker-black-label-5d_650ab99c0572e.png', 1000, 21.91, 'Scotland', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'Johnnie Walker Red Label Blended Scotch Whisky', 'Indulge all of your senses with a smooth glass of Johnnie Walker Red Label Blended Scotch Whisky. Highly versatile and with universal appeal, it has a bold, distinctive flavor that shines through even when mixed. Johnnie Walker Red Label is now one of the best-selling Scotch whiskies around the globe. Perfect for parties and get-togethers, at home, or going out, we recommend enjoying with friends. Simply mix with squeezed lime and ginger ale and pour over ice for a Johnnie & Ginger. Johnnie Walker Red Label earned a double gold medal at the 2021 San Francisco World Spirits Competition and was recognized as one of the world\'s top-trending Scotch whiskies at the 2020 Drinks International awards. Includes one 80 proof 1 L bottle of Red Label Blended Scotch Whisky. Please drink responsibly.Nose: Spark of fresh zest from elegant Speyside and Highland malts in the aromas of our classic Johnnie Walker Red Label.\r\nTaste: An exotic combination of spicy cinnamon and fresh black pepper, which crackles on the center of your tongue.\r\nFinish: Flavors developing into a long and smoky finish – the signature of all Johnnie Walker blends.', 'ci-johnnie-walker-red-label-f850_650ab9a2d49a0.png', 1000, 9.99, 'Scotland', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'Jack Daniel\'s Old No. 7 Tennessee Whiskey', 'Jack Daniel\'s Tennessee Whiskey is the world\'s best selling whiskey, with every drop distilled at the Jack Daniel Distillery in Lynchburg, Tennessee, America\'s oldest registered distillery, established in 1866. Made from the finest corn, rye, and barley malt these choice grains are mixed with the iron-free water that flows from the Cave Spring found on the distillery grounds. From there Jack Daniel\'s is charcoal mellowed drop by drop through 10 feet of sugar maple charcoal which imparts our distinct smoothness. Finally, Jack Daniel\'s is matured in handcrafted white oak barrels of our own making.', 'jack-daniels-old-no-7_650ab9ace943b.png', 990, 14.99, 'Tennessee, United States', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'Smirnoff No. 21 80 Proof Vodka', 'As the World\'s No. 1 Vodka, Smirnoff No. 21 80 Proof Vodka delivers a dry finish for elevated smoothness and clarity. Each bottle is Kosher Certified, gluten free, and made from non-GMO corn for quality. Triple distilled and 10 times filtered using Smirnoff\'s multiple column filtration method, this award-winning vodka boasts a remarkable smoothness. Enjoy this spirit on the rocks, or use it to whip up your favorite cocktail. Simply mix this vodka with ginger beer and lime juice, and you have a classic Smirnoff Moscow Mule. This vodka is a smooth choice for creating tempting vodka cocktails to serve at your next party or get-together. Please enjoy responsibly.', 'vodka-smirnoff_650ab9b294a1f.png', 989, 9.5, 'United States', '40', '0000-00-00 00:00:00', '2023-09-25 07:36:09', 2),
(8, 'GREY GOOSE Vodka', 'Grey Goose Vodka is a premium vodka, born of an extraordinary passion for spirit-making. It is created using only the finest French ingredients – the highest-grade wheat and pristine limestone-filtered spring water. It is a spirit of uncommon brilliance, unrivaled craftsmanship and signature smoothness and is an excellent choice as a gift.Grey Goose Vodka has an exquisite clear, fresh and elegantly aromatic taste. This is a premium vodka of unparalleled smoothness and exceptional taste, with subtle hints of almond and a long, satisfying finish.Grey Goose Vodka has an exquisite clear, fresh and elegantly aromatic taste. This is a premium vodka of unparalleled smoothness and exceptional taste, with subtle hints of almond and a long, satisfying finish.', 'grey-goose-vodka_650ab9c013aba.png', 990, 12.09, 'France', '40', '0000-00-00 00:00:00', '2023-09-25 07:30:57', 2),
(9, 'Absolut Original Vodka', 'Absolut Vodka is one of the most famous vodkas in the world. It\'s made from winter wheat grown in the fields of Åhus, Sweden. Absolut is rich, full bodied and blends beautifully with other aromas, enhancing the taste of your drinks and cocktails. It has been produced at the famous old distilleries near Ahus in accordance with more than 400 years of Swedish tradition. In 1879, Lars Olsson Smith, its founder, introduced the continuous distillation with which he made Absolut. Instead of the usual three or four times, the vodka was distilled an infinite number of times. This vodka has completely redefined the premium vodka landscape, becoming synonymous with art, culture and nightlife. By starting a revolution in cocktail creation and launching a range of flavors never before seen on the market, Absolut has become an icon in its own right.', 'absolut-vodka_650ab9c5bb441.png', 990, 8.99, 'Sweden', '40', '0000-00-00 00:00:00', '2023-09-25 07:31:46', 2),
(10, 'SVEDKA Vodka', 'SVEDKA Vodka is a smooth and easy-drinking vodka infused with a subtle, rounded sweetness, making it an ideal addition to countless vodka cocktails. Now made in the USA, this unflavored vodka is distilled four times to remove impurities, using a continuous distillation process to ensure that ingredients never stall or pool. The result is a clean, clear taste with a balanced body and a crisp finish, making this 80 proof vodka a bold, crowd-pleasing choice. Mix this popular vodka alcohol into cosmopolitans or vodka martinis, or chill and pour over ice to enjoy a vodka on the rocks, savoring the crisp finish. Go Responsibly. Svedka® © 2022 Spirits Marque One, San Francisco, CA Vodka distilled from grain 40% alc/vol', 'svedka-vodka_650ab9cda7616.png', 954, 8.96, 'United States', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(11, 'Tito\'s Handmade Vodka', 'Founded by sixth-generation Texan, Tito Beveridge, Tito’s Handmade Vodka is known for its high-quality product, charitable contributions, and goal to make people happy while making the world a better place. From the start, Tito got a kick out of infusing vodka for friends and quickly became known as “the vodka guy.” With a dream to do what he loved, and a dog by his side, he pursued a career in the spirits industry, risking it all until he sold his first case.\r\n\r\nOver twenty-five years later, Tito’s Handmade Vodka has stayed true to its roots and is designed to be savored by both spirit connoisseurs and those who enjoy a simple cocktail. Our gluten-free, low-calorie* vodka is American-made, unflavored, and distilled using old-fashioned copper pot stills, inspired by the distillation methods of fine single malt scotches and high-end French cognacs. Over 25 years later, the process remains the same; Tito’s is made in batches, with each batch taste-tested, and goes down smooth with an impeccably clean finish. From a Bloody Mary at brunch, a martini at cocktail hour, or a simple Tito’s and soda with friends – just add Tito’s and enjoy! Distilled and bottled on the same land in Austin, Texas, Tito’s Handmade Vodka is made from 100% corn and is naturally gluten-free. Available in Liter, 1.75L, 750mL, 375mL, 200mL, and 50mL sizes. For more information, visit titosvodka.com. *(Average Analysis per 1.5oz Tito’s Handmade Vodka: 98 calories, Carbohydrates 0 grams, Protein 0 grams, Fat 0 grams)', 'titos-handmade_650ab9dec8d99.png', 1000, 9.99, 'Texas, United States', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(12, 'Ketel One Vodka', 'Experience the taste inspired by traditional distilling expertise with Ketel One Family Made Vodka. Our 80 proof vodka is carefully crafted using exclusively 100% non-GMO European wheat for smoothness and neutrality. Distilled in copper pot stills, filtered over loose charcoal and stored in lined tanks, our vodka offers a crisp, unique flavor and strong finish. Perfect on its own or added with your favorite cocktail, simply mix with club soda, a cucumber ribbon and garnish with a sprig of mint for a refreshing tasting Soda with Cucumber Mint cocktail. Ketel One Family Made Vodka was recognized as the top-trending vodka at the 2020 Drinks International awards. Includes one 80 proof 1 L bottle of Ketel One Family Made Vodka. Please drink responsibly.Nose: Crisp, lively tingle | Taste: Signature silky softness coat your tongue | Finish: Long, with subtle flavors', 'ketel-one_650ab9ee92af2.png', 1000, 9.99, 'Netherlands', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(13, 'Bombay Sapphire Gin', 'Bombay Sapphire is a world famous gin known for its distinctive blue bottle. Every drop contains 10 hand-selected botanicals from exotic locations around the world. The most versatile gin for cocktail creativity. Perfectly balanced, bright and fresh. A fresh, balanced taste with bright citrus notes. Each sip features notes of juniper, citrus coriander, peppers and spices. BOMBAY SAPPHIRE Gin goes well in a martini cocktail or Tom Collins.', 'bombay-sapphire_650ab9f6e8ad7.png', 1000, 16.19, 'England, United Kingdom', '47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(14, 'Jose Cuervo Especial Gold', 'The #1 tequila brand in the world, Jose Cuervo Especial® Gold is a golden blend of younger tequilas. The light gold spirit has a sweet aroma with pleasant agave notes. Along with its sweet, subtle agave flavor and hints of oak and vanilla, Especial Gold boasts a well-balanced, short, smooth finish. (40% ABV-80 proof)\r\n• In history and today, Jose Cuervo Especial is the popular choice for crafting any Margarita: frozen or on the rocks. Jose Cuervo knows how to craft tequila.', 'jose-cuervo-especial-gold_650aba0b4df82.png', 1000, 9.62, 'Mexico', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(15, 'Miller Lite Lager Beer', 'Miller Lite Beer is the original light lager beer. With a smooth, light and refreshing taste, this American-style pilsner beer has 4.2% ABV. Brewed for more taste, this light beer has a light to medium body with a hop-forward flavor, solid malt character, and a clean finish. This case of beer cans makes bringing along tasty drinks easy. Miller Lite is brewed with pure water for great taste; barley malt for flavor and golden color; and Galena and Saaz hops for aroma, flavor, and bitterness. These elements all lend to a consistently great malt beer experience. This light American beer has 96 calories and 3.2 grams of carbs per 12-ounce serving. It is a perfect low-calorie beer to accompany tailgating, barbeques, hanging out with friends and any occasion that would be better with Miller Lite. Miller beer goes well with countless food items such as burgers, grilled shrimp skewers, and whitefish. It’s Miller Time. Hop forward flavor and solid malt character with a soft bitterness.', 'miller-lite_650aba1f87925.png', 1000, 5.03, 'Wisconsin, United States', '4.2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10),
(16, 'PATRÓN Silver Tequila', 'The world’s first ultra-premium tequila, PATRÓN Silver should be savored from the very first sip--delicate aromas of roasted agave and fresh citrus yield to the sweet and smooth taste of this classic silver tequila, with a light pepper finish. Patrón silver represents the perfect balance of fresh agave flavor with baked agave undertones – essential notes you’ll find in all PATRÓN Tequilas. PATRÓN Tequila has always been Additive-Free because of our unwavering commitment to craft, authenticity, and integrity. Roasted agave, fresh citrus, tropical fruits, pepper.', 'patron-silver_650aba26d2e7c.png', 1000, 29.99, 'Mexico', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(17, 'Jose Cuervo Especial Silver Tequila', 'Jose Cuervo® is the world’s #1 tequila brand. The 1st commercial producers of tequila maintains quality tequila production from farm to bottle. Cuervo tequilas are crafted with blue agave from the family estate in Jalisco, Mexico and can be savored in Especial, Tradicional and Reserva de la Familia® brands.\r\n• The world’s #1 cocktail, The Margarita, is best enjoyed with Cuervo tequila! Cuervo offers ready-to-drink cocktails under the Authentic Margarita, Golden Margarita, Sparkling Margarita, and Playamar Hard Seltzer brands.', 'jose-cuervo-especial-silver_650aba2fad0aa.png', 1000, 8.79, 'Mexico', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(18, 'Don Julio Reposado', 'Don Julio Reposado Tequila is the very essence of the perfect barrel-aged tequila. With flavors of ripe stone fruit, vanilla and cinnamon, every sip leads into a silky, warm finish. Aged for at least 6 months in American white-oak barrels, our amber-colored tequila is made with 100% Blue Weber Agave and is perfect for any celebration. Don Julio was named One of the Top Trending Tequilas at the 2020 Drinks International awards. Simply mix with grapefruit juice, fresh lime juice and agave nectar and pour over ice for a refreshing tasting Don Julio Paloma. Includes one 80 proof 375 mL bottle of Reposado Tequila. Please drink responsibly.Nose: An inviting aroma of mellow lemon citrus notes and spice layers with touches of ripe stone fruit\r\nTaste: Incredibly soft and elegant hints of dark chocolate, vanilla and light cinnamon\r\nFinish: Silky, warm finish with an essence of dried fruit, nuts and a touch of caramel apple.', 'don-julio-reposado_650aba3927f13.png', 1000, 18.25, 'Mexico', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(19, 'Espolòn Tequila Blanco', 'Start each tequila cocktail with Espolon Tequila Blanco, the purest expression of Espolon tequila. Created in the highlands of Jalisco as a tequila for the people, Espolon Tequila Blanco is inspired by and a tribute to Mexican culture. Handcrafted with 100% Blue Weber Agave, the tequila liquor is double distilled using column and pot stills to give it a smooth and balanced taste profile. Combining notes of sweet agave and tropical fruit with zesty lemon aromas and a hint of pepper, this tequila offers a soft mouthfeel and clean finish. Enjoy this tequila on the rocks or shaken into one of your favorite tequila cocktails like a Margarita or Espolon Paloma, the national cocktail of Mexico. The award-winning tequila was named Impact ‘Hot Brand’ winner 5 years in a row and is one of the US’ fastest growing premium tequilas. The 750 ml bottle of Espolon Tequila Blanco has a 40% alcohol by volume and should be enjoyed responsibly.', 'espolon-blanco_650aba4774a60.png', 1000, 11.99, 'Mexico', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(20, 'Casamigos Blanco', 'Longtime friends George Clooney, Rande Gerber and Mike Meldman love Casamigos. On the rocks, by the shot, at times, straight from the bottle. Tequila-filled nights with friends is how Casamigos was born.\r\n“Our idea was to make the best-tasting, smoothest Tequila and Mezcal that didn’t have to be covered up with salt or lime. So we did.”\r\n-George Clooney and Rande Gerber\r\n\r\nCasamigos, a small batch, ultra-premium tequila made from the finest, hand-selected 100% Blue Weber agaves, grown in the rich red clay and cool climate of the Highlands of Jalisco, Mexico for a minimum of seven years. After harvest, the agave piñas are roasted in traditional brick ovens for 72 hours, before undergoing an extra-slow fermentation process over an additional eighty hours, nearly double the industry standard.\r\n\r\nCasamigos Blanco Tequila rests for 2 months and is crisp and clean with hints of citrus, vanilla and sweet agave, with a long smooth finish.\r\n\r\nCasamigos Blanco is best served neat on the rocks or as a perfect base for cocktails such as the classic margarita. To make simply mix 2 oz Casamigos Blanco Tequila, 1 oz fresh lime juice, .25 oz fresh orange juice, .5 oz agave nectar, and .5 oz orange liqueur of your choice in a shaker. Add ice, shake vigorously and then strain into a rocks glass. Add fresh ice and garnish with a lime wheel.\r\n\r\nBuy Casamigos Blanco online at a great price through Drizly and have it delivered directly to your door or pick it up in store.', 'casamigos-blanco_650aba4f972c7.png', 1000, 10.99, 'Mexico', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(21, 'Tanqueray London Dry Gin, (94.6 Proof)', 'Tanqueray London Dry Gin is made with an expertly crafted recipe that blends the four distinct botanicals of juniper, coriander, angelica and licorice. The result is a perfectly balanced spirit that has a unique herbal quality and dry finish. Tanqueray London Dry Gin earned a double gold medal at the 2021 San Francisco World Spirits Competition and was crowned the Bartenders’ Choice of Gin at the 2020 Drinks International awards for the 8th year in a row. The perfect inspiration for your own ingenious cocktails, pour our celebrated Tanqueray London Dry Gin over a liberal amount of ice in a wine glass, top up with premium tonic and garnish with a lime wedge for a refreshing tasting gin and tonic. Includes one 94.6 proof 1 L bottle of Tanqueray London Dry Gin. Please drink responsibly.The highest quality spirit and finest botanicals, picked at the peak of their freshness, are carefully crafted to produce it\'s exceptional, much revered taste.', 'tanqueray-london-dry-gin_6511916588db2.png', 1000, 16.31, 'England', '47.3', '2023-09-25 06:26:09', '2023-09-25 06:55:49', 3),
(22, 'New Amsterdam Gin', 'New Amsterdam Gin is uniquely distilled with flavors of orange, lime, vanilla, and a hint of traditional juniper and anise. With a smooth finish, this versatile classic can be enjoyed straight, or as a part of classic cocktails, such as gin and tonic or a martini. This award winning gin has received 95 Points from The Tasting Panel, 2017. New Amsterdam Gin is a modern take on the 400-year tradition.', 'new-amsterdam-gin_65118acf40f19.png', 1000, 8.99, 'United States', '40', '2023-09-25 06:27:43', '2023-09-25 06:27:43', 3),
(23, 'BACARDÍ Gold Rum', 'BACARDÍ Gold rum is the proud creation of the Maestros de Ron Bacardí, charcoal filtered, mellowed from one to two years in toasted American white oak barrels and blended. The liquid brings depth and character to classic rum cocktails, like the Cuba Libre, while maintaining a smooth finish. A light golden rum with a soft oak flavor. Notes of dry vanilla, ginger root, and toasted almond provide a dry and slightly sweet finish.', 'bacardi-gold_6511931ab7df7.png', 1000, 9.34, 'Mexico', '40', '2023-09-25 07:03:06', '2023-09-25 07:03:06', 6),
(24, 'Malibu Pineapple Rum', 'One of our most iconic Caribbean flavors, Malibu Pineapple is a refreshing tasting cocktail in a bottle. This drink features Caribbean rum with a tart and fresh pineapple liqueur that has a smooth and sweet finish and goes well in all your favorite tropical drinks. As you sip your cocktail, you will feel inspired to do whatever tastes good as you enjoy the light and tangy flavor that Malibu Pineapple offers. Shake Malibu Pineapple with a few ice cubes and a splash of lime juice for a flavor explosion. It\'s a great drink to share with friends or family in any occasion.', 'malibu-pineapple-rum_6511939004507.png', 1000, 9.99, 'Barbados', '21', '2023-09-25 07:05:04', '2023-09-25 07:05:04', 6),
(25, 'Hennessy V.S Cognac', 'World’s most popular cognac meaning Very Special. Modern day equivalent of the original Hennessy Three-Star created in 1865. Selected from 4 premier growing areas', 'hennessy-vs-cogna_6511940146ca4.png', 1000, 26.71, 'France', '40', '2023-09-25 07:06:57', '2023-09-25 07:06:57', 5),
(26, 'Rémy Martin 1738 Accord Royal', 'Rémy Martin 1738® Accord Royal is an exceptionally smooth take on Rémy Martin’s signature style. Its mellow body, oaky notes of butterscotch and baked spices come from a unique process of aging eaux-de-vie in new French oak casks that were toasted using a long and soft heating process. The story starts with a royal approval: in 1738, King Louis XV granted Rémy Martin the right to expand his vineyards, at a time of land scarcity. As an homage to this ultimate recognition, the house created an exceptionally oaky and smooth blend: 1738 Accord Royal.\r\nBest enjoyed neat, on the rocks or in classic cocktails.', 'remy-martin-1738_65119442cf44c.png', 1000, 10, 'France', '40', '2023-09-25 07:08:02', '2023-09-25 07:08:02', 5),
(27, 'Coors Light American Lager Beer', 'Coors Light Beer is an American style light lager. Crisp, clean and refreshing, this light beer has a 4.2% alcohol by volume. Full of Rocky Mountain refreshment, this light calorie beer has a light body with clean malt notes and low bitterness. This case of beer is great to share with friends and family all year long when you’re in need of refreshing drinks. Not only is Coors Light lager beer crafted with pure water, lager yeast, two-row barley malt and four different hop varieties, but it is cold lagered, cold filtered and cold packaged to deliver an unforgettable beer drinking experience. This light calorie beer has 102 calories and 5 grams of carbs per 12 fluid ounce serving. Coors Light beer makes for great party drinks and is great for tailgating, barbeques, and any holiday that calls for beer. Coors Light takes pride in their process and ingredients that make it The World’s Most Refreshing Beer.', 'coors-beer_651194e99a7bb.png', 1000, 5.03, 'United States', '', '2023-09-25 07:10:49', '2023-09-25 07:10:49', 10),
(28, 'Corona Extra Lager Mexican Beer', 'Corona Extra Mexican Lager Beer is an even-keeled imported beer with aromas of fruity-honey and a touch of malt. Brewed in Mexico since 1925, this lager beer\'s flavor is refreshing, crisp, and well-balanced between hops and malt. Made from the finest-quality blend of filtered water, malted barley, hops, corn, and yeast, Corona Extra Beer has a refreshing, smooth taste that offers the perfect balance between heavier European import beer and lighter domestic beer. This Mexican lager style beer is a great summer beer; enjoy it with friends at your next barbecue, beach day, tailgate, or evening get-together. A smooth-drinking beer, Corona Extra cerveza contains 148 calories* and 4.6% alcohol by volume. *Per 12 fl. oz. serving of average analysis: Calories 148, Carbs 13.9 grams, Protein 1.2 grams, Fat 0 grams. Relax responsibly®. Corona Extra® Beer. Imported by Crown Imports, Chicago, IL', 'corona-beer_651195375162d.png', 1000, 5.02, 'Mexico', '', '2023-09-25 07:12:07', '2023-09-25 07:12:07', 10),
(29, 'Decoy Cabernet Sauvignon', 'From its deep, inviting color to its enticing berry and spice layers, this wine showcases what we love about great Cabernet Sauvignon. On the palate, the lush fruit flavors are framed by rich tannins and hints of dark chocolate and barrel spice.\r\n\r\n91 pts - Wine Review Online (v.20)\r\n90 pts - James Suckling (v.18)', 'decoy-cabernet-sauvignon_65119593d5039.png', 1000, 14, 'United States', '13.9', '2023-09-25 07:13:39', '2023-09-25 07:13:39', 7),
(30, 'Mark West Pinot Noir Red Wine', 'Showing a fine combination of ripe, red fruit and sweet oak, this medium bodied Mark West Pinot Noir stays right in there as a fine example of the varietal.', 'mark-west-pinot-noir_651195e18a488.png', 985, 6.59, 'United States', '13.5', '2023-09-25 07:14:57', '2023-09-27 06:33:56', 7),
(31, 'Kendall-Jackson Vintner\'s Reserve Chardonnay', 'As America’s #1 selling Chardonnay for 30 years and counting, the Kendall-Jackson Vintner\'s Reserve Chardonnay is trusted for its quality and craftsmanship making it the perfect wine for any occasion. Family-owned and operated since 1982, Kendall-Jackson is committed to producing only the finest quality wines from chardonnay grapes grown in California\'s most celebrated wine-growing regions. Recognized as a hallmark of California Chardonnay, this certified sustainable wine highlights the vivid fruit flavors of the Golden State’s cool, coastal vineyards. This medium-bodied, barrel-fermented white wine has light, toasted oak aromas and is crafted boutique-winery style in small individual lots throughout the winemaking process for flavor distinction. The beautifully integrated flavors of this white wine are a balance of baked apples, tropical fruits, and citrus– finished with a kiss of butter and vanilla that linger on your palate. This classic Chardonnay is both food friendly or great for sipping on its own. Pair with salmon, grilled chicken breast, fettuccine alfredo, or fish tacos. This bottle features a convenient screw cap that is 100% recyclable for fresh wine and easy pouring. This bottled California chardonnay is 13.5% alcohol by volume. One 375ml bottle is equivalent to 2.5 glasses of wine. One 750ml bottle is equivalent to 5 glasses of wine. This wine is 3rd party Certified Sustainable by CCSW (California Sustainable Winegrowing), SIP (Sustainability In Practice), and IWCA (International Wineries for Climate Action).', 'kendall-jackson-chardonnay-_65119627effc6.png', 987, 7.59, 'United States', '13.5', '2023-09-25 07:16:07', '2023-09-25 07:33:36', 8),
(32, 'Cavit Pinot Grigio', 'It’s believed that pinot grigio has been produced in Italy since the early 19th century. Cavit continues the time-honored tradition, growing our signature grapes in the picturesque Italian countryside, and harvesting them at just the right moment. The result is a dry, refreshingly fruity varietal that makes dinner al fresco an affair to remember. It’s no wonder Cavit Pinot Grigio has become America’s favorite wine!\r\n\r\n86 Points BEST BUY - Wine Enthusiast, June/July 2020', 'cavit-pinot-grigio_651196af6ed3b.png', 999, 2.99, 'Italy', '12', '2023-09-25 07:18:23', '2023-09-25 07:33:19', 8),
(33, 'Whispering Angel Rosé', 'Whispering Angel is today’s worldwide reference for Provence rosé. Its pale color is pleasing to the eye and draws one in. The rewarding taste profile is full and lush while being bone dry with a smooth finish. Highly approachable and enjoyable with a broad range of cuisine, Whispering Angel is a premium rosé that you can drink from mid-day to midnight.\r\n\r\nCreated by Sacha Lichine following his acquisition of Château d’Esclans in 2006, his vision was to create the greatest rosés in the world igniting the “Rosé Renaissance”. Sacha introduced new and innovative winemaking techniques to Provence which revolutionized the styles of rosés being produced from this region. This led to the creation of Whispering Angel, a world class rosé which presents both ease and accessibility making for enjoyment and pleasure.\r\n\r\nAs Sacha says “In the Esclans Valley angels whisper. If you drink this wine, you might hear them… If you visit us, you might see them.”', 'whispering-angel-rose_651196ffcc380.png', 980, 9.99, 'France', '13.5', '2023-09-25 07:19:43', '2023-09-27 18:12:04', 9);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` double NOT NULL,
  `review` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `created_at`, `updated_at`, `rating`, `review`, `name`, `email`, `user_id`, `product_id`) VALUES
(1, '2023-09-25 07:42:09', '2023-09-25 07:42:09', 5, 'qua ngon', '', '', 1, 29),
(2, '2023-09-25 07:42:21', '2023-09-25 07:42:21', 1, 'k ngon', '', '', 1, 31),
(3, '2023-09-25 07:42:37', '2023-09-25 07:42:37', 5, 'ngon', '', '', 1, 33),
(4, '2023-09-25 07:45:10', '2023-09-25 07:45:10', 5, 'ngonon', '', '', 2, 1),
(5, '2023-09-25 07:45:21', '2023-09-25 07:45:21', 3, 'cung dc', '', '', 2, 29),
(6, '2023-09-25 07:45:30', '2023-09-25 07:45:30', 1, 'k ngon', '', '', 2, 33),
(7, '2023-09-25 07:45:40', '2023-09-25 07:45:40', 3, 'cung ngnon', '', '', 2, 31),
(8, '2023-09-25 07:46:03', '2023-09-25 07:46:03', 5, 'qua ngonnnnnnnn', '', '', 2, 14),
(9, '2023-09-25 07:46:14', '2023-09-25 07:46:14', 4, 'cung duoc', '', '', 2, 7),
(10, '2023-09-25 07:46:23', '2023-09-25 07:46:23', 2, 'cung dc', '', '', 2, 8),
(11, '2023-09-25 07:46:32', '2023-09-25 07:46:32', 5, 'ok', '', '', 2, 30),
(12, '2023-09-27 06:25:23', '2023-09-27 06:25:23', 2, 'fsgsegsegse', '', '', 2, 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'client',
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `balance`) VALUES
(1, 'nghiaadmin', 'nghiaadmin@gmail.com', NULL, '$2y$10$6JmYeb21YAmUF3wAE2CSUuzJmkDBIQ4EIsv8wH6kfNAa2z9xzC5W.', NULL, '0000-00-00 00:00:00', '2023-09-27 18:47:21', 'admin', 98285),
(2, 'Huynh Nghia', 'nghia@gmail.com', NULL, '$2y$10$xJu2S8.fvvTpI2SeTD0/.O3KWZb.ap.v0rSsleI6Ol4ygcta46vqS', NULL, '0000-00-00 00:00:00', '2023-09-27 06:36:39', 'client', 10043),
(3, 'nghia1', 'nghia1@gmail.com', NULL, '$2y$10$n2ApS23EUCKtju58m3kSjexw72LvoRrZ4ESZuW1IBbAQRzN/h0wAC', NULL, '2023-09-25 07:26:33', '2023-09-25 07:26:33', 'client', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_order_id_foreign` (`order_id`),
  ADD KEY `items_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
