-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 04:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `LongDescription` varchar(3000) NOT NULL,
  `Price` decimal(9,2) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`id`, `Name`, `Role`, `Description`, `LongDescription`, `Price`, `img`) VALUES
(33, 'Call of duty ', 'Military war game', 'Modern warfare ', 'Call of Duty is a first-person shooter video game franchise that focuses heavily on military and war themes, offering a realistic experience of battles and military confrontations. The game includes a variety of weapons and military equipment, and allows players to customize and develop their characters over time. The franchise is known for its continuous updates and new additions that add extra content and improve the gameplay experience. Call of Duty is one of the most popular video game franchises in the world, enjoyed by players of all ages and nationalities.', '899.00', '64914e447cea63.80863712.jpeg'),
(34, 'Ghada Azzam', 'league of legends', 'Advanced Coach', 'working with players who are new to the game or have limited experience. They have a patient and encouraging approach to coaching and are skilled at breaking down the fundamentals of the game into simple and easy-to-understand concepts. Some advantages of working with an advanced  coach include:\r\n\r\n- Learning the basics: helping the trainees learn the basic skills and rules of the game, which is essential for building a strong foundation.\r\n\r\n- Building confidence: create a positive and supportive learning environment that helps trainees feel comfortable and confident as they develop their skills.\r\n\r\n- Individualized attention: provide feedback and guidance that is tailored to the individual needs of each trainee, helping them to progress at their own pace.', '100.00', 'f89c545a-7edb-4f25-b02a-16ca746febb6-smal5970'),
(35, 'Najeeb Khan', 'league of legends', 'grandmaster Coach', 'an experienced coach who has a deep understanding of the game and is able to provide advanced training and guidance to players at all levels. Some advantages of working with a master coach include:\r\n\r\n- Advanced training: provide advanced training and guidance that is tailored to the specific needs of each trainee, helping them to improve their skills and performance.\r\n\r\n- Strategic thinking: skilled at analyzing players\' strengths and weaknesses and can create training sessions that are challenging and effective.\r\n\r\n- Mentoring: provide mentorship and guidance to trainees, helping them to develop their skills and achieve their goals.', '200.00', '52027722565_b300a1834a_k-e1660235468354'),
(36, 'Erik Milošević', 'league of legends', 'Elite Coach', 'highly experienced coach who has a proven track record of success at the highest levels of the sport. Some advantages of working with an elite coach include:\r\n\r\n- High-level training: provide training and guidance that is tailored to the specific needs of each trainee, helping them to reach their full potential and achieve success at the highest levels of the sport.\r\n\r\n- Strategic planning: skilled at developing strategic plans and game plans that can help trainees succeed in competition.\r\n\r\n- Mental toughness: helping trainees develop mental toughness and resilience, which is essential for success at the highest levels of the sport.', '300.00', 'ESPORTS_COACH_Robban-1'),
(37, 'Jana Khattab', 'FIFA 23', 'advanced Coach', '- Access to basic training materials and tutorials\r\n- Learning the fundamental skills of the game, such as passing, shooting, and defending\r\n- Understanding the different game modes and how to play them effectively', '100.00', '62dae18ff974602c2bb2a6e8_6-min'),
(38, 'Mukhtar Khan', 'FIFA 23', 'Grandmaster Coach', '- Personalized training \r\n- Development of playing style and strategies\r\n- Performance analysis to identify areas for improvement\r\n- Access to advanced training materials and tutorials', '200.00', 'Roseau_at_OMEN_Challenger_Series_2019-1024x575'),
(39, 'Zenichiro Hitsuka', 'FIFA 23', 'Elite Coach', 'highly experienced coach who has a proven track record of success at the highest levels of the sport. Some advantages of working with an elite coach include:\r\n\r\n- High-level training: provide training and guidance that is tailored to the specific needs of each trainee, helping them to reach their full potential and achieve success at the highest levels of the sport.\r\n\r\n- Strategic planning: skilled at developing strategic plans and game plans that can help trainees succeed in competition.\r\n\r\n- Mental toughness: helping trainees develop mental toughness and resilience, which is essential for success at the highest levels of the sport.', '300.00', '5e97746973d0c814c5459f59');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(30) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `address` int(200) NOT NULL,
  `city` int(30) NOT NULL,
  `zip` varchar(4) NOT NULL,
  `pay_way` varchar(20) NOT NULL,
  `customer_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product`, `price`, `status`, `address`, `city`, `zip`, `pay_way`, `customer_id`) VALUES
(1, 'Johen Doe', 400, 'pending', 19, 0, '1234', '', 30),
(2, 'Johen Doe', 400, 'pending', 19, 0, '1234', '', 30),
(3, 'Johen Doe', 400, 'pending', 19, 0, '1234', '', 30),
(4, 'Johen Doe', 400, 'pending', 19, 0, '1234', '', 30),
(5, 'Johen Doe', 400, 'pending', 19, 0, '1234', '', 30),
(6, 'Mark Doe', 1000, 'pending', 19, 0, '1234', '', 30),
(7, 'Xbox Wireless Controller', 1800, 'pending', 19, 0, '1234', '', 30),
(8, 'Mark Doe', 1000, 'pending', 19, 0, '1234', '', 30),
(9, 'Xbox Wireless Controller', 1800, 'pending', 19, 0, '1234', '', 30),
(10, 'Johen Doe', 400, 'pending', 19, 0, '1234', '', 30),
(11, 'Razer Skin - Razer Blade 16', 772, 'pending', 19, 0, '1234', '', 30);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `LongDescription` varchar(3000) NOT NULL,
  `Price` decimal(9,2) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `Name`, `Role`, `Description`, `LongDescription`, `Price`, `img`) VALUES
(1, 'Plus', '', 'Experienced coaches for personalized feedback.', 'This package is ideal for those who are looking for experienced coaches to provide personalized feedback on their gameplay. Coaches in this package have a good understanding of the game and can help you identify areas for improvement and provide tips to enhance your skills.\r\n', '100.00', ''),
(2, 'Premium', '', 'Top-level coaches for real-time guidance.', 'This package is designed for those who want to work with top-level coaches who have extensive experience in the game. Coaches in this package can provide real-time guidance during gameplay, helping you make quick decisions and improve your overall performance.', '200.00', ''),
(3, 'Platinum', '', 'Elite-level coaches for one-on-one coaching sessions.', 'This package is for those who are serious about taking their game to the next level. Coaches in this package are elite-level experts in the game and can provide one-on-one coaching sessions to help you achieve your full potential. They can help you develop a personalized training plan, identify your strengths and weaknesses, and provide ongoing support and guidance.', '300.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `ShortDescription` varchar(150) NOT NULL,
  `LongDescription` varchar(3000) NOT NULL,
  `Price` decimal(9,2) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `selling` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Name`, `Category`, `ShortDescription`, `LongDescription`, `Price`, `img`, `selling`) VALUES
(18, 'Logitech G Pro X Superlight', 'Mouse', 'Logitech G Pro X Superlight Wireless Gaming Mouse', 'Logitech G Pro X Superlight Wireless Gaming Mouse', '4500.00', '64710188013557.49616477.jpg', 'best-selling'),
(19, 'Xbox Wireless Controller', 'Controller', 'Easily pair and switch between devices including Xbox Series X, Xbox Series S, Xbox One, Windows PC,', 'Easily pair and switch between devices including Xbox Series X, Xbox Series S, Xbox One, Windows PC, Android, and iOS.', '1800.00', '64711c329a2370.22533638.jpg', 'best-selling'),
(1256, 'Redragon PISCES P016 Gaming Mouse Pad', 'mouse pad', 'Redragon PISCES P016 Gaming Mouse Pad – Size 33×26 cm', 'THICK HIGH QUALITY MATERIALS; Underside is made of natural processed foam rubber, which adapts to different surface materials and provides a solid gaming platform, high-quality long-life design.\r\nZERO SLIP AND ANTI-CURLING; The anti-slip foam rubber base helps the Redragon Gaming Mouse Pad to stay securely in place and prevents curling. The slick looking Vibrant Design makes it a joy using it on any desk', '125.00', '73oPTidFl27eQvOXy0vBSOloDIO4FPvsFfdNINoI.jpg', ''),
(1257, 'MX MASTER 3S FOR MAC', 'mouse', 'Performance Wireless Mouse\r\n', 'The MX Master 3S for Mac is a high-end wireless mouse designed specifically for use with Apple Mac computers. It features a sleek and ergonomic design that fits comfortably in the hand, and is equipped with advanced features that make it ideal for productivity and creative work. The mouse has a high-precision sensor that tracks movement accurately, and can be customized with adjustable DPI settings. It also has a unique thumb wheel that allows for horizontal navigation and advanced gesture controls, making it easy to switch between apps and perform complex tasks. The MX Master 3S for Mac is also equipped with Logitech\'s Flow technology, which allows users to seamlessly switch between multiple computers and transfer files and documents with ease. Overall, the MX Master 3S for Mac is a top-of-the-line wireless mouse that offers advanced features and customization options for Mac users who demand the best.', '957.00', 'mx-master-3s-for-mac-mouse-top-view-pale-grey.webp', ''),
(1258, 'MX ERGO', 'mouse', 'MX Ergo is a science-driven ergonomic trackball mouse that reduces hand and wrist movement.', 'MX Ergo is a science-driven ergonomic trackball mouse that reduces hand and wrist movement. Its unique adjustable tilt lets users choose a 0° or 20° angle to instantly improve wrist and forearm posture. Plus, with no need to move the hand around to move the cursor, the trackball creates 20% less muscle fatigue in the hand, wrist, and forearm than a regular mouse. MX Ergo’s sculpted design, adjustable tracking speed, and precision scroll wheel allow for full customizability and hours of comfortable productivity.', '3089.00', 'mx-ergo-plus-gallery-02.webp', ''),
(1259, 'ZONE VIBE 100', 'headset', 'Lightweight, wireless headphones — professional ', 'Dimensions\r\nHeadset\r\nHeight: 7.20 in (183 mm)\r\nWidth: 6.68 in (169.7 mm)\r\nDepth: 2.87 in (73 mm)\r\nWeight: 6.52 oz (185 g)\r\nEar pad\r\nHeight: 3.88 in (98.6 mm)\r\nWidth: 2.97 in (75.4 mm)\r\nDepth: 0.76 in (19.3 mm)\r\nTechnical Specifications\r\nMicrophone\r\nType: Dual omni-directional MEMS mics with directional beamforming and DSP\r\nFrequency Response: 100 ~ 8 KHz\r\nSpeakers\r\nFrequency response (music mode): 20 ~ 20 KHz\r\nFrequency response (talk mode): 100 ~ 8 KHz\r\nSensitivity: 118.0±3 dB at 1mW @1 kHz\r\nDriver size: 1.57 in (40 mm)\r\nBattery\r\nBuilt-in battery (Lithium ion)\r\nBattery life (talk time): Up to 18 hrs\r\nBattery life (listening time): Up to 20 hrs 1Battery life may vary based on users and computing conditions.\r\nCharging\r\nUSB-C charging cable: 5 ft (1.5 m)\r\nWireless\r\nBluetooth version: 5.2\r\nWireless range: Up to 100 ft /30 m (open field line of sight) 2Wireless range may vary based on users and computing conditions.', '3289.00', 'zone-vibe-100-gallery-white-1.webp', ''),
(1260, 'Razer Enki Pro - Automobili Lamborghini Edition', 'gaming chair', 'Premium Gaming Chair with Alcantara® Leather for All-Day Comfort', 'The Razer Enki Pro - Automobili Lamborghini is a high-performance gaming chair that is designed to provide gamers with the ultimate gaming experience. This chair is a collaboration between Razer and Automobili Lamborghini, and it features a sleek and stylish design that is inspired by the iconic Lamborghini supercars.\r\n\r\nThe chair is made from high-quality materials, including a durable steel frame and premium leather upholstery, which provides both comfort and durability. The chair is also equipped with a range of advanced features, including a multi-function tilt mechanism, adjustable armrests, and a memory foam headrest and lumbar support.\r\n\r\nThe Razer Enki Pro - Automobili Lamborghini also features Razer\'s Chroma RGB lighting technology, which allows users to customize the lighting on the chair to match their gaming setup. The lighting can be controlled using Razer\'s Synapse software, which also allows users to customize the chair\'s settings and save them to the cloud.\r\n\r\nIn addition to its advanced features and stylish design, the Razer Enki Pro - Automobili Lamborghini is also designed with ergonomics in mind. The chair is designed to provide optimal support for the back, neck, and shoulders, which helps to reduce fatigue and improve posture during long gaming sessions.\r\n\r\nOverall, the Razer Enki Pro - Automobili Lamborghini is a top-of-the-line gaming chair that offers advanced features, stylish design, and ergonomic support for gamers who demand the best.', '40100.00', 'https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h99_h43_9456056795166_221015-enki-pro-lamborghini-1500x1000-2.jpg', 'best-selling'),
(1261, 'Razer Skin - Razer Blade 16', 'Skin', 'Durable Laptop Skins made with Customized 3M™ Cast Vinyl', 'The Razer Skin for the Razer Blade 16 in Geometric Quartz Top is a high-quality protective skin that is designed to keep your laptop safe from scratches, scuffs, and other types of damage. This skin is specifically designed to fit the Razer Blade 16 laptop, and it features a stylish geometric quartz top design that adds a touch of personality to your device.\r\n\r\nThe skin is made from high-quality vinyl material that is both durable and easy to apply. The skin is designed to be easy to install, and it can be removed without leaving any residue behind. The skin is also designed to be thin and lightweight, which means that it won\'t add any extra bulk to your laptop.\r\n\r\nIn addition to its protective qualities, the Razer Skin for the Razer Blade 16 in Geometric Quartz Top also features Razer\'s Chroma RGB lighting technology. This allows you to customize the lighting on your laptop to match your gaming setup or personal style. The lighting can be controlled using Razer\'s Synapse software, which also allows you to customize other settings on your laptop.\r\n\r\nOverall, the Razer Skin for the Razer Blade 16 in Geometric Quartz Top is a high-quality protective skin that offers both style and functionality. It is designed to keep your laptop safe from damage while also allowing you to customize its appearance to match your personal style. If you\'re looking for a way to protect your Razer Blade 16 laptop while also adding a touch of personality, the Razer Skin is an excellent choice.', '772.00', 'https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h34_h9e_9471525158942_230130-blade16-top-geometric-quartz-1500x1000-1.jpg', ''),
(1262, 'Razer Skins - Xbox Series X ', 'skin', 'Durable console skins made with Customized 3M™ Cast Vinyl', 'The Razer Skins for the Xbox Series X in Geometric Quartz Complete is a set of high-quality protective skins that are designed to keep your gaming console safe from scratches, scuffs, and other types of damage. This set includes skins for the console itself, as well as the controller and the charging dock, all featuring a stylish geometric quartz design that adds a touch of personality to your gaming setup.\r\n\r\nThe skins are made from high-quality vinyl material that is both durable and easy to apply. The skins are designed to be easy to install, and they can be removed without leaving any residue behind. The skins are also designed to be thin and lightweight, which means that they won\'t add any extra bulk to your gaming console or controller.\r\n\r\nIn addition to their protective qualities, the Razer Skins for the Xbox Series X in Geometric Quartz Complete also feature Razer\'s Chroma RGB lighting technology. This allows you to customize the lighting on your gaming console and controller to match your gaming setup or personal style. The lighting can be controlled using Razer\'s Synapse software, which also allows you to customize other settings on your gaming console and controller.\r\n\r\nOverall, the Razer Skins for the Xbox Series X in Geometric Quartz Complete is a high-quality protective skin set that offers both style and functionality. It is designed to keep your gaming console and controller safe from damage while also allowing you to customize their appearance to match your personal style. If you\'re looking for a way to protect your Xbox Series X while also adding a touch of personality, the Razer Skins are an excellent choice.', '1235.00', 'https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h67_hb0_9533815488542_230602-xbox-series-x-complete-geometric-quartz-1500x1000-1.jpg', ''),
(1263, 'Razer Enki X', 'gaming chair', 'Essential Gaming Chair for All-Day Comfort\r\n', 'The Razer Enki X Chair is a premium gaming chair that is designed to provide gamers with the ultimate comfort and support during long gaming sessions. This chair features a sleek and stylish design that is inspired by racing car seats, and it is built with high-quality materials that are both durable and comfortable.\r\n\r\nThe Razer Enki X Chair features a multi-tilt mechanism that allows you to adjust the angle of the seat and backrest to your preferred position. This mechanism also allows you to lock the chair in place at any angle, providing you with the perfect level of support for your body. The chair also features adjustable armrests that can be moved up and down, forward and backward, and even angled to provide you with the perfect level of support for your arms and wrists.\r\n\r\nThe Razer Enki X Chair is also designed for comfort and durability. It features a high-density foam cushion that is covered with a breathable fabric that helps to keep you cool and comfortable during long gaming sessions. The chair is also built with a sturdy metal frame that can support up to 299 pounds, making it suitable for gamers of all sizes.\r\n\r\nIn addition to its comfort and support features, the Razer Enki X Chair also features Razer\'s Chroma RGB lighting technology. This allows you to customize the lighting on the chair to match your gaming setup or personal style. The lighting can be controlled using Razer\'s Synapse software, which also allows you to customize other settings on the chair.\r\n\r\nOverall, the Razer Enki X Chair is a premium gaming chair that is designed to provide gamers with the ultimate comfort and support during long gaming sessions. It is built with high-quality materials, features a multi-tilt mechanism, adjustable armrests, and Razer\'s Chroma RGB lighting technology, making it an excellent choice for serious gamers who demand the best.', '9238.00', 'https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h5b_h82_9248880787486_211021-enki-x-1500x1000-1.jpg', ''),
(1264, 'Razer Wireless Controller', 'controller', 'Officially Licensed Xbox Controller and Quick Charging Stand', 'The Razer Wireless Controller and Quick Charging Stand for Xbox Razer Limited Edition is a high-performance gaming controller and charging stand designed for Xbox gamers who demand the best. This limited edition set features a sleek and stylish design that is inspired by Razer\'s iconic gaming products, and it is built with high-quality materials that are both durable and comfortable.\r\n\r\nThe Razer Wireless Controller features Razer\'s HyperSpeed wireless technology, which provides a lag-free wireless connection that is as fast as a wired connection. This means that you can enjoy the freedom of wireless gaming without sacrificing performance. The controller also features Razer\'s Mecha-Tactile Action Buttons and D-Pad, which provide a tactile and responsive feel that is perfect for fast-paced gaming.\r\n\r\nThe Quick Charging Stand is designed to keep your controller charged and ready to go at all times. It features a sleek and stylish design that matches the Razer Wireless Controller, and it is built with high-quality materials that are both durable and stable. The stand also features Razer Chroma RGB lighting technology, which allows you to customize the lighting on the stand to match your gaming setup or personal style.\r\n\r\nThe Razer Wireless Controller and Quick Charging Stand for Xbox Razer Limited Edition also comes with a USB-C cable for charging the controller, and it is compatible with Xbox One and Xbox Series X/S consoles. The controller has a battery life of up to 50 hours on a single charge, and the Quick Charging Stand can fully charge the controller in just four hours.\r\n\r\nOverall, the Razer Wireless Controller and Quick Charging Stand for Xbox Razer Limited Edition is a high-performance gaming controller and charging stand designed for serious Xbox gamers who demand the best. It features Razer\'s HyperSpeed wireless technology, Mecha-Tactile Action Buttons and D-Pad, and Razer Chroma RGB lighting technology, making it an excellent choice for gamers who want a premium gaming experience.', '6148.00', 'https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_hf6_h2c_9445021876254_221006-universal-quick-charging-stand-xob-1500x1000-1.jpg', ''),
(1265, 'Razer Wolverine V2 Pro', 'controller', 'Wireless Pro Gaming Controller for PS5™ Consoles and PC', 'The Razer Wolverine V2 Pro is a high-performance gaming controller designed for Xbox and PC gamers who demand the best. This controller features a sleek and stylish design that is inspired by Razer\'s iconic gaming products, and it is built with high-quality materials that are both durable and comfortable.\r\n\r\nThe Razer Wolverine V2 Pro features Razer\'s Mecha-Tactile Action Buttons and D-Pad, which provide a tactile and responsive feel that is perfect for fast-paced gaming. The controller also features six remappable buttons, allowing you to customize the controller to your preferred layout. The controller also has a hair trigger mode, which reduces the distance required to activate the triggers, providing a faster response time.\r\n\r\nThe Razer Wolverine V2 Pro is also designed for comfort and durability. It features a non-slip rubber grip that provides a comfortable and secure grip during long gaming sessions. The controller is also built with a sturdy metal frame that can withstand the rigors of intense gaming.\r\n\r\nIn addition to its performance and comfort features, the Razer Wolverine V2 Pro also features Razer Chroma RGB lighting technology. This allows you to customize the lighting on the controller to match your gaming setup or personal style. The lighting can be controlled using Razer\'s Synapse software, which also allows you to customize other settings on the controller.\r\n\r\nOverall, the Razer Wolverine V2 Pro is a high-performance gaming controller designed for serious Xbox and PC gamers who demand the best. It features Razer\'s Mecha-Tactile Action Buttons and D-Pad, six remappable buttons, hair trigger mode, non-slip rubber grip, and Razer Chroma RGB lighting technology, making it an excellent choice for gamers who want a premium gaming experience.', '7724.00', 'https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h2d_h0b_9450417455134_221109-wolverine-v2-pro-1500x1000-5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(30) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `address` int(200) NOT NULL,
  `city` int(30) NOT NULL,
  `zip` varchar(4) NOT NULL,
  `pay_way` varchar(20) NOT NULL,
  `customer_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `product`, `price`, `status`, `address`, `city`, `zip`, `pay_way`, `customer_id`) VALUES
(6, 'Mark Doe', 1000, 'pending', 19, 0, '1234', '', 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `firstName`, `lastName`, `address`, `city`, `phone`, `zip`) VALUES
(5, 'admin', 'admin@a.com', 'admin', 'admin', '', '', '', '', '', 0),
(30, 'jox', 'yousef.a.abdelkarim@gmail.com', '123', 'user', 'Yousef', 'Abdelkariem', '19 ش النصر متفرع من ابو عيسى م', 'cairo', '+11204846938', 1234),
(31, '123123', 'yousef.a.abdelkarim@gmail.com', '123', 'user', 'Yousef', 'Abdelkariem', '19 ش النصر متفرع من ابو عيسى م', '19 ش النصر متفرع من ش ابو عيسى', '+11204846938', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1266;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
