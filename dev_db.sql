-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 06:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities_logo`
--

CREATE TABLE `amenities_logo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(120) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `amenities_logo`
--

INSERT INTO `amenities_logo` (`id`, `name`, `logo`, `status`, `created_date`) VALUES
(1, 'Security', 'amenities-logo-2023-07-24-07-19-55.jpg', 1, '2023-07-24 12:19:55'),
(2, 'RO Water System', 'amenities-logo-2023-07-24-07-25-46.png', 1, '2023-07-24 12:25:46'),
(3, 'Air Conditioned', 'amenities-logo-2023-07-24-07-26-00.png', 1, '2023-07-24 12:26:00'),
(4, 'Fire Fighting Equipment', 'amenities-logo-2023-07-24-07-26-13.png', 1, '2023-07-24 12:26:13'),
(5, 'Power Back Up', 'amenities-logo-2023-07-24-07-26-29.png', 1, '2023-07-24 12:26:29'),
(6, 'Swimming Pool', 'amenities-logo-2023-07-24-07-26-41.png', 1, '2023-07-24 12:26:41'),
(7, 'Club House', 'amenities-logo-2023-07-24-07-26-59.png', 1, '2023-07-24 12:26:59'),
(8, 'Elevator', 'amenities-logo-2023-07-24-07-27-13.png', 1, '2023-07-24 12:27:13'),
(9, 'Reserved Parking', 'amenities-logo-2023-07-24-07-27-27.png', 1, '2023-07-24 12:27:27'),
(10, 'Park', 'amenities-logo-2023-07-24-07-27-36.png', 1, '2023-07-24 12:27:36'),
(11, 'children play', 'amenities-logo-2023-08-16-04-54-33.png', 1, '2023-08-16 04:54:33'),
(12, 'outdoor park', 'amenities-logo-2023-08-25-07-33-36.png', 1, '2023-08-25 07:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_subTitle` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `cat_vdo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `cat_title`, `cat_subTitle`, `cat_img`, `cat_vdo`) VALUES
(26, 'DLF ULTIMA', 'Mega Star Performers', 'work-culture-1257848514.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `image` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `shortDesc` text NOT NULL,
  `description` varchar(11000) NOT NULL,
  `blogDate` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `large_image` varchar(500) DEFAULT NULL,
  `mobile_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `heading`, `shortDesc`, `description`, `blogDate`, `status`, `createdDate`, `large_image`, `mobile_image`) VALUES
(45, 'Have a problem with your real estate builder? Here’s how RERA can help', 'It’s been more than five years since the Real Estate (regulation and development) Act 2016 was enacted. However, another year’s time was given to various state governments for drafting rules, setting up appellate tribunals, appointing officers and operationalizing websites and other provisions. Ultimately, the Act was implemented from May 1, 2017. Since then, a number of cases have been filed and disposed by various authorities at the state level. As a home buyer, using RERA’s guiding hand for resolving your complaints against builders or to search for information to can be helpful.', 'rera, real estate, homebuyer, developer, builder', '', 'Have a problem with your real estate builder? Here’s how RERA can help', 'It’s been more than five years since the Real Estate (regulation and development) Act 2016 was enacted. However, another year’s time was given to various state governments for drafting rules, setting up appellate tribunals, appointing officers and operationalizing websites and other provisions. Ultimately, the Act was implemented from May 1, 2017. Since then, a number of cases have been filed and disposed by various authorities at the state level. As a home buyer, using RERA’s guiding hand for resolving your complaints against builders or to search for information to can be helpful.', '<p>It&rsquo;s been more than five years since the Real Estate (regulation and development) Act 2016 was enacted. However, another year&rsquo;s time was given to various state governments for drafting rules, setting up appellate&nbsp;tribunals, appointing officers and operationalizing websites and other provisions. Ultimately, the Act was implemented from May 1, 2017. Since then, a number of cases have been filed and disposed by various authorities at the state level. As a home buyer, using RERA&rsquo;s guiding hand for resolving your complaints against builders or to search for information to can be helpful.</p>\r\n\r\n<h3><strong>When can you approach RERA?</strong></h3>\r\n\r\n<p>Complaints against developers as well as real estate agents can be made, provided they are registered with the respective RERA. The Act makes it mandatory for every real estate project that has a land area in excess of 500 square metres or has more than eight apartments, needs to be registered. Developers also need to indicate the names of registered real estate agents who will be working for their projects.</p>\r\n\r\n<p>So, as a home buyer, you start getting protection under the Act from the time the project starts getting advertised. &ldquo;Depending on the nature of action or omission, the home-buyer may be able to approach RERA as early as the booking stage. On issues such as deviations from specifications advertised/ agreed upon, an aggrieved homebuyer can approach RERA even after accepting possession and transfer of title,&rdquo; says Mani Gupta, partner, Sarthak Advocates &amp; Solicitors.</p>\r\n\r\n<p>Besides, &ldquo;a buyer can file a complaint on delay in possession, inconsistencies in design, any demand for advances beyond the permissible limit, false advertisements, non-payment in assured return cases, diversion of funds, alteration in project without consent, breach of any term of the builder-buyer agreement pertaining to the property,&rdquo; says Harsh Pathak, real- estate matters counsel. Remember, a developer cannot ask for more than 10 percent of the property value before signing a builder-buyer agreement or an agreement for sale.</p>\r\n', '2021-07-14', 1, '2023-09-15 05:43:13.909354', 'blog-l580292881.jpg', 'blog-m1914026750.jpg'),
(46, 'Realty index at 10-year high: 7 stocks are still 10-80% lower than record highs – time to buy them?', 'The real estate sector could turn out to be the Dark Horse of 2021 and barring the possibility of a third wave of the pandemic, realty stocks can continue their run-up', 'Stock tips, stocks tips, share tips, share market tips, Trading, Sensex, Nifty', '', 'Realty index at 10-year high: 7 stocks are still 10-80% lower than record highs – time to buy them?', 'The real estate sector could turn out to be the Dark Horse of 2021 and barring the possibility of a third wave of the pandemic, realty stocks can continue their run-up\r\n\r\nReal estate stocks are back on investors’ radar thanks to institutional and retail money pouring into the sector, which could turn out to be the Dark Horse of 2021, experts suggest.', '<p>Real estate stocks are back on investors&rsquo; radar thanks to institutional and retail money pouring into the sector, which could turn out to be the Dark Horse of 2021, experts suggest.</p>\r\n\r\n<p>The Nifty Realty Index, comprising of 10 real estate companies listed on the National Stock Exchange of India, hit a 10-year high (intraday) on Tuesday, putting the stocks in the spotlight after close to a decade of underperformance.</p>\r\n\r\n<p>The factors that contributed to the stellar rise in realty stocks include work from home amid COVID-19, which pushed many families to buy big houses, low interest rates, lower stamp duty in some states, reduction of debt by companies, increase in demand for both commercial and retail property, and institutional investments.</p>\r\n\r\n<p>&ldquo;On July 13, 2021, the realty index reached an intra-day high of 386.85 points, its highest level since December 2010. With several companies providing work-from-home options or mandates, families are rushing to purchase larger homes to improve the comfort of their working environment,&rdquo; said Gaurav Garg, head of research at CapitalVia Global Research Ltd. &ldquo;Furthermore, the central bank&rsquo;s significant interest rate cuts over the last two years, combined with efforts like stamp duty reductions in locations like Mumbai, have boosted demand.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-07-15', 1, '2023-09-15 07:56:45.003133', 'blog-l1196989653.jpg', 'blog-m1684153698.jpg'),
(48, 'Delhi-NCR gets more luxury houses: 17% of total housing units launched in the last 6 months are luxury', 'Amid pandemic, investments in residential real estate is now looked at as a trend with more people buying houses', 'Delhi-NCR, Delhi, luxury houses, luxury house demand, residential real estate, real estate, real estate investment, anarock, housing units', '', 'Delhi-NCR gets more luxury houses: 17% of total housing units launched in the last 6 months are luxury', 'Amid pandemic, investments in residential real estate is now looked at as a trend with more people buying houses. It’s not just affordable housing that people are looking at, but sales of luxury and ultra-luxury houses (having prices above Rs 1.5 crore) have increased.', '<p>Amid pandemic, investments in residential real estate is now looked at as a trend with more people buying houses. It&rsquo;s not just affordable housing that people are looking at, but sales of luxury and ultra-luxury houses (having prices above Rs 1.5 crore) have increased. On the back of this growing trend, real estate developers in Delhi and NCR region have supplied more houses in the luxury segment. Of the 10,570 housing units launched in Delhi-NCR during the first six months of this year, 17 per cent of houses belonged to the luxury segment, said Anarock Property Consultants. Last year, luxury houses were not more than 9 per cent of the overall houses constructed.</p>\r\n\r\n<p>From 2018 till June 2021, as many as 11,300 new luxury units have been launched in the entire Delhi-NCR. The year 2020 saw the lowest share of luxury housing supply.</p>\r\n\r\n<p>Santhosh Kumar, Vice Chairman at Anarock Property Consultants said, &ldquo;Noida accounted for the maximum new luxury share (73 per cent) in the first half of this year, followed by Gurugram with a 22 per cent share, and Greater Noida with a 5 per cent share.&rdquo; However, other regions of NCR like Ghaziabad, Faridabad and Bhiwadi did not see any new luxury housing launches in this period. According to the report,&nbsp;<a href=\"https://www.financialexpress.com/market/godrej-properties-ltd-share-price/\">Godrej Properties</a>&nbsp;Limited,&nbsp;<a href=\"https://www.financialexpress.com/market/dlf-ltd-share-price/\">DLF</a>&nbsp;Group, ATS Green,&nbsp;<a href=\"https://www.financialexpress.com/market/sobha-ltd-share-price/\">Sobha</a>&nbsp;Limited, and Birla Estates among others were the top providers of luxury housing this year.</p>\r\n', '2021-07-15', 1, '2023-09-15 07:57:44.944671', 'blog-l1416505510.jpg', 'blog-m1349453030.jpg'),
(53, 'DDA Flats in Noida Sec 15', 'DDA Flats in Noida Sec 15, DDA Housing Colony, DDA Flats in Noida Sec 15', 'DDA Flats in Noida Sec 15, DDA Housing Colony', '', 'DDA Flats Property in Noida Sec 15', 'This scheme has HIG, MIG, LIG, JANTA and EWS type of Flats · *The Price of Flats at Jasola Pocket 9B(3BHK/HIG) is inclusive of 2 Stilt/Basement Parking.', '<p>Is it good to buy DDA flats?</p>\r\n\r\n<p>Is it worth buying DDA Flats under housing scheme 2021-2022?&nbsp;<strong>Yes, it is an echoing YES</strong>. It is a far superior choice to co-operative societies or other builder&#39;s apartments in Delhi/NCR, especially in terms of structural safety.</p>\r\n', '2023-09-25', 1, '2023-09-25 05:29:15.130420', 'blog-l139571065.jpg', 'blog-m348653872.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `page_url` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `page_url`, `status`, `createdDate`) VALUES
(1, 'Residential', 'residential', 1, '2023-09-08 04:14:15'),
(2, 'Commercial', 'commercial', 1, '2023-09-08 04:14:19'),
(3, 'Featured', 'featured', 1, '2023-09-08 04:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city_name`, `status`, `created_date`) VALUES
(1, 29, 'New Delhi', 1, '2023-08-03 12:55:49'),
(4, 29, 'South Ex', 1, '2023-09-02 03:02:16'),
(5, 8, 'Gurgaon', 1, '2023-09-09 11:18:57'),
(6, 26, 'Noida', 1, '2023-09-11 04:57:42'),
(7, 2, 'AP', 1, '2023-09-12 10:31:13'),
(8, 26, 'Noida Extension', 1, '2023-09-13 05:14:42'),
(9, 26, 'Greater Noida West', 1, '2023-09-13 05:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `status`, `created_date`) VALUES
(14, 'sam', 'sam@gmail.com', 98949494343, 'hi testing of the ', 1, '2023-09-20 09:04:01'),
(15, 'v', 'v@gmail.com', 98494839348, 'testinf ofthe dim realtors', 1, '2023-09-20 09:20:42'),
(16, 'samuel', 'admin@gmail.com', 98989494994, 'sdfghjkl./', 1, '2023-09-20 09:33:23'),
(17, 'samuel', 'admin@gmail.com', 98989494994, 'dfcgvbnm,fgm,.', 1, '2023-09-20 09:33:42'),
(18, 'dee', 'dee@gmail.com', 9889849383, 'hi dee times of the india', 1, '2023-09-20 09:58:33'),
(19, 'best', 'best@gmail.com', 98948393484, 'hi best', 1, '2023-09-20 11:49:48'),
(20, 'best', 'best@gmail.com', 98948393484, 'hi best', 1, '2023-09-20 11:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `address` varchar(120) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id`, `name`, `logo`, `address`, `about`, `status`, `created_date`) VALUES
(19, 'Golf State', 'uploads/developer/developer-logo-2023-09-08-08-23-02.jpg', 'Golf State addressssss', 'Golf State aboutssss', 1, '2023-09-08 11:53:17'),
(20, 'Siearra', 'uploads/developer/developer-logo-2023-09-09-07-46-22.jpg', 'Delhi', 'delhis', 1, '2023-09-09 11:16:45'),
(22, 'Ambience', 'uploads/developer/developer-logo-1694772291.jpg', 'Sector - 50, Noida', 'Since its inception in 1986, Ambience Group distinguished itself from the competition as the developers of premium real estate projects. Ambience commenced its journey of developing premium residential apartments in Delhi, and later acquired a landmark real estate land parcel in Gurugram, NH-8, zero km from Delhi Border for the development of signature integrated township Ambience Island. The property comprises of Residential Ambience Caitriona Ambience Lagoon, RetailAmbience Mall, HotelLeela Ambience, CommercialAmbience Corporate Tower, 9 Hole Golf Greens and Community Facilities.', 1, '2023-09-15 03:04:51'),
(24, 'Parx Laureate', 'uploads/developer/developer-logo-1694772476.jpg', 'Sector-108, Noida', 'Laureate Buildwell is the brain child of Unity Divine Group. Since 1996, Unity Group has been building success and shaping Delhi\'s skyline. It has developed and delivered more than 10 million sq.ft. of commercial, retail, hospitality and spaces and working on approx. 15 million sq. ft. of real estate developments. Divine India is a group of companies engaged in the fields of real estate development, architecture, engineering, construction, IT, education, hospitality etc. striving to achieve ultimate in its respective field creating new-age lifestyles to give its customers “The Midas Touch”.', 1, '2023-09-15 03:07:56'),
(25, 'County 1O7', 'uploads/developer/developer-logo-1694772582.jpg', 'Sector 107, Noida', 'At the County Group, we celebrate the importance of You as an individual. We value your unique identity complete with its innate characteristics, personality attributes and behavioral needs. We cater to your different requirements, your every desire and your specific needs; therefore, we bring you properties with a unique persona. So, extend your persona onto your home. Build your sanctuary with the County Group.\r\n\r\nCounty Group is one of the leading real estate developers and reputed builders in Noida. Over the years, the Group has left its mark with several residential apartments and commercial complexes that are today landmarks in their respective locations. These apartments and complexes which are cornerstones of aesthetic design and quality construction have set this group apart as one of the top builders in Noida.', 1, '2023-09-15 03:09:43'),
(26, 'Kalpataru Vista', 'uploads/developer/developer-logo-1694773032.jpg', 'Sector - 128, Wish Town, Noida', 'We bring more than 5 decades of real estate Excellence to developing and building premium residential towers, gated communities, townships and office properties. Our 120+ awards &amp; accolades are testimony to our legacy.', 1, '2023-09-15 03:17:12'),
(27, 'M3M The Cullinan', 'uploads/developer/developer-logo-1694774623.jpg', 'Sector-94, Noida', 'M3M stands for Magnificent and groundbreaking ideas that keep them out of the crowd. Diversified group of professionals works dedicated and offer best quality material with advanced technology for the better lifestyle and with the complete security system, which undoubtedly offers best and lucrative return in the future. And the company has created the eye opening position in the real estate sector and serve more than what the buyers deserve.', 1, '2023-09-15 03:43:43'),
(28, 'Max Estates', 'uploads/developer/developer-logo-1694773345.jpg', 'Sector 128, Noida', 'Established in 2016, the mission of Max Estates is to offer spaces for Residential and Commercial use with utmost attention to detail, design and lifestyle. Max Estates aspires to be the most trusted Real Estate company driven by the desire to enhance the well-being of everyone we touch. Currently Max Estates’ portfolio consists of one residential community of luxury villas, and three commercial office properties in NCR that brought in the concept of WorkWell to India.', 1, '2023-09-15 03:22:25'),
(29, 'Gulshan Dynasty', 'uploads/developer/developer-logo-1694773480.jpg', 'Sector 144, Noida', 'Gulshan Dynasty is a new residential project by Gulshan Dynasty Group coming soon in Sector 144 Noida is a perfect blend of modernity, lavishness and comfort to give you an ideal urban lifestyle. An entire eco-friendly development with huge expanse of green countryside complementing the comfortable Gulshan Dynasty residences in Sector 144 Noida Expressway, this housing project is spreading over 18 acres of land. Gulshan Dynasty is one of the most awaited luxury projects in Noida by Gulshan.', 1, '2023-09-15 03:24:40'),
(30, 'Gulshan', 'uploads/developer/developer-logo-1694773929.jpg', 'Noida Extension ', 'One of Gulshan Homz’s best residential developments in Noida Extension is Gulshan Avante. You will undoubtedly adore your dream homes, which are just as unique as you are. A number of families are enjoying life to the fullest in this pre-launch residential development.\r\n\r\nCome and hold hands with Thriving where the heavenly way of life is going to be in your grasp. Within a well-landscaped skyscraper, beauty is redefined. This is your chance to spend a happy future with your loved ones at the best location. This development with a lot of people from different classes is making news and winning over homebuyers’ hearts.', 1, '2023-09-15 03:32:09'),
(31, 'CRC Joyous', 'uploads/developer/developer-logo-1694774059.jpg', 'Greater Noida West ', 'The developer CRC Group has won trust of the customers through its utmost professionalism and on- time delivery of the projects. The name of the developer stands for luxury homes and affordability. CRC Group is backed by rich experience and has got a dedicated team for operations. It focuses on world class construction quality, affordability and premium features.', 1, '2023-09-15 03:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `file_type` text NOT NULL COMMENT '1=>image,2=>video',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `date`, `catname`, `image`, `file_type`, `status`, `created_at`) VALUES
(8, '2022', '15', 'uploads/gallery_category/gallery-img-15424020.jpg', '1', 1, '2023-09-23 09:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`id`, `catname`, `image`, `status`, `created_at`) VALUES
(14, 'Omax', 'uploads/gallery_category/1231678652.jpg', 1, '2023-09-23 07:11:45'),
(15, 'Raheja', 'uploads/gallery_category/1075735217.jpg', 1, '2023-09-23 07:12:00'),
(16, 'Realtors', 'uploads/gallery_category/805299294.jpg', 1, '2023-09-23 07:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `id` int(5) NOT NULL,
  `job_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`id`, `job_id`, `title`, `name`, `email`, `mobile`, `experience`, `description`, `resume`, `date`) VALUES
(1, 0, 'Graphic Designer', 'deepak bhat', 'deepak@gmail.com', '9989484948', '3', 'Having 3+ yrs of graphic designering', 'admin/uploads/jobapplication/199150832.pdf', '2023-09-23 16:37:08'),
(2, 0, 'ENGINEER', 'dixit sam', 'sam@gmail.com', '9489948393', '9', 'hi testig', '1585049937.pdf', '2023-09-23 16:47:16'),
(3, 0, 'Graphics Designer', 'd', 'debu@gmail.com', '23324343', '3', 'sdfasdf asd', '148783619.pdf', '2023-09-23 18:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `job_descriptions`
--

CREATE TABLE `job_descriptions` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `descriptions` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `seq` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_descriptions`
--

INSERT INTO `job_descriptions` (`id`, `job_id`, `title`, `descriptions`, `status`, `seq`) VALUES
(2, 2, 'JOB DESCRIPTION', '<p>We are seeking a talented UI/UX Designer to join our creative team. As a UI/UX Designer at test company, you will play a crucial role in creating intuitive and visually appealing digital experiences that delight our users. You will collaborate with cross-functional teams to design and refine our products, ensuring they meet the highest standards of usability and aesthetics.<br /></p>', 1, 0),
(3, 2, 'RESPONSIBILITIES', '<p><h3 class=\"title\" style=\" margin-bottom: 20px; font-weight: 600; line-height: 1.2; font-size: 18px; color: rgb(236, 239, 243); font-family: Dosis, Arial, Helvetica, sans-serif; letter-spacing: 3px; text-transform: uppercase; border: none; text-align: left; background-color: rgb(70, 77, 88)\"></h3></p>\r\n<ul style=\"margin-bottom: 1rem; text-align: left;\"><li>Conduct user research to understand user needs and preferences.</li><li>Create wireframes, prototypes, and user flows to visualize design concepts.</li><li>Develop visually appealing user interfaces (UI) that align with our brand identity.</li><li>Optimize the user experience (UX) by improving user flows and interactions.</li><li>Collaborate with product managers, developers, and other stakeholders to ensure design alignment with project goals and technical requirements.</li></ul>', 1, 0),
(4, 2, 'SKILLS REQUIREDs', '<p><ul style=\"margin-bottom: 1rem; text-align: left;\"><li>Adobe XD</li><li>Sketch</li><li>Figma</li><li>Adobe Photoshop</li></ul></p>', 1, 0),
(5, 3, 'JOB DESCRIPTION', '<p>We are seeking a talented UI/UX Designer to join our creative team. As a UI/UX Designer at test company, you will play a crucial role in creating intuitive and visually appealing digital experiences that delight our users. You will collaborate with cross-functional teams to design and refine our products, ensuring they meet the highest standards of usability and aesthetics.<br /></p>', 1, 0),
(6, 3, 'RESPONSIBILITIES', '<p><ul style=\"margin-bottom: 1rem; text-align: left;\"><li>Conduct user research to understand user needs and preferences.</li><li>Create wireframes, prototypes, and user flows to visualize design concepts.</li><li>Develop visually appealing user interfaces (UI) that align with our brand identity.<br /></li><li>Optimize the user experience (UX) by improving user flows and interactions.<br /></li></ul><br /></p>', 1, 0),
(7, 3, 'SKILLS REQUIRD', '<p><ul style=\"margin-bottom: 1rem; text-align: left;\"><li>Adobe XD</li><li>Sketch</li><li>Figma</li><li>Adobe Photoshop</li></ul><br /></p>', 1, 0),
(8, 5, 'Job Description', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br /></p>', 1, 1),
(9, 5, 'Responsibilties', '<ul style=\"margin-bottom: 1rem; text-align: left;\"><li>Conduct user research to understand user needs and preferences.</li><li>Create wireframes, prototypes, and user flows to visualize design concepts.</li><li>Develop visually appealing user interfaces (UI) that align with our brand identity.</li><li>Optimize the user experience (UX) by improving user flows and interactions.</li><li>Collaborate with product managers, developers, and other stakeholders to ensure design alignment with project goals and technical requirements.</li></ul>', 1, 2),
(10, 5, 'Skills Required', '<p><ul style=\"margin-bottom: 1rem; text-align: left;\"><li>Adobe XD</li><li>Sketch</li><li>Figma</li><li>Adobe Photoshop</li></ul><br /></p>', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `job_listing`
--

CREATE TABLE `job_listing` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `page_url` varchar(500) DEFAULT NULL,
  `meta_title` varchar(500) DEFAULT NULL,
  `meta_keyword` varchar(500) DEFAULT NULL,
  `meta_descriptions` longtext DEFAULT NULL,
  `job_type` int(11) NOT NULL,
  `experience` varchar(10) DEFAULT NULL,
  `locations` varchar(500) DEFAULT NULL,
  `short_descriptions` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sequence` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_listing`
--

INSERT INTO `job_listing` (`id`, `title`, `page_url`, `meta_title`, `meta_keyword`, `meta_descriptions`, `job_type`, `experience`, `locations`, `short_descriptions`, `status`, `created_at`, `sequence`) VALUES
(1, 'PHP Developer', 'PHP-Developer1694169908', 'PHP Developer', '', '', 1, '1', 'noida 62', 'Short Descripti', 1, '2023-09-08 12:34:15', 1),
(2, 'UI/UX DESIGNER', 'UI-UX-DESIGNER', 'UI/UX DESIGNER', 'UI/UX DESIGNER', 'UI/UX DESIGNER', 1, '4', 'Noida Sector 41', 'As a Web Developer at Agicent, you are going to perform following roles utilizing full stack technologies like PHP, Laravel, MySQL, AWS, JS, HTML and performance and testing tools.ssss', 1, '2023-09-07 18:30:00', 2),
(4, 'AI Developer', 'AI-Developer1695012298', 'test', 'test', 'test', 1, '1', 'noida sector 15', 'test', 1, '2023-09-18 04:44:58', 3),
(5, 'test career', 'test-career1695012487', 'test career title', 'test career keyword', 'test description', 1, '1', 'test location', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 1, '2023-09-18 04:48:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

CREATE TABLE `locality` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`id`, `city_id`, `address`, `status`, `created_date`) VALUES
(1, 1, 'Abhay Garden', 1, '2023-08-08 05:47:56'),
(2, 1, 'Ajit Nagar', 1, '2023-08-08 05:48:01'),
(3, 1, 'Ajit Vihar', 1, '2023-08-08 05:48:06'),
(4, 1, 'Akshardham', 1, '2023-08-08 05:48:14'),
(5, 1, 'Arjun Nagar', 1, '2023-08-08 05:48:21'),
(6, 1, 'Arjun Vihar', 1, '2023-08-08 05:48:28'),
(7, 1, 'Aruna Nagar', 1, '2023-08-08 05:48:35'),
(8, 1, 'Arya Nagar', 1, '2023-08-08 05:48:41'),
(9, 1, 'Babu Nagar', 1, '2023-08-08 05:48:47'),
(10, 1, 'Balbir Nagar', 1, '2023-08-08 05:48:53'),
(11, 1, 'Civil Lines', 1, '2023-08-08 05:49:02'),
(12, 1, 'Dwarka', 1, '2023-08-08 05:49:08'),
(15, 1, 'South Delhi', 1, '2023-09-04 04:56:00'),
(16, 1, 'East delhi', 1, '2023-09-04 04:56:24'),
(17, 5, 'Sector 24', 1, '2023-09-09 11:27:57'),
(18, 5, 'Sector 56', 1, '2023-09-09 11:38:52'),
(19, 6, 'Gautam budh Nagar', 1, '2023-09-11 05:03:07'),
(20, 6, 'Sector 107', 1, '2023-09-12 03:49:28'),
(21, 6, 'Sector 128', 1, '2023-09-12 04:21:15'),
(22, 6, 'Sector 94 ', 1, '2023-09-12 04:58:45'),
(23, 6, 'Sector 108', 1, '2023-09-13 03:18:26'),
(24, 6, 'Sector 144', 1, '2023-09-13 04:51:27'),
(25, 8, 'Noida Extension', 1, '2023-09-13 05:15:11'),
(26, 9, 'Greater Noida West', 1, '2023-09-13 05:39:05'),
(27, 6, 'Sector 50 ', 1, '2023-09-15 02:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `date`) VALUES
(1, 'admin@gmail.com', 'admin', '2023-08-18 06:49:32'),
(2, 'test@gmail.com', 'admin', '2023-08-18 07:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `meta_details`
--

CREATE TABLE `meta_details` (
  `id` int(11) NOT NULL,
  `page_type` longtext NOT NULL,
  `meta_title` longtext NOT NULL,
  `meta_keyword` longtext NOT NULL,
  `meta_descriptions` longtext NOT NULL,
  `header` longtext NOT NULL,
  `footer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta_details`
--

INSERT INTO `meta_details` (`id`, `page_type`, `meta_title`, `meta_keyword`, `meta_descriptions`, `header`, `footer`) VALUES
(1, 'index', 'Property Finder - Premimum Real Estate Projects of Noida', 'Property Finder Premimum Real Estate Projects of Noida', 'One of the fastest growing companies in India, PROPERTY FINDER offers comprehensive real estate solutions. We are defined by trust and excellence with a commitment to customer satisfaction and technology.', '<!-- Global site tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-176295333-1\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-176295333-1\');\r\n</script>', ''),
(2, 'about', 'Property Finder - Premimum Real Estate Projects of Noida', '', 'One of the fastest growing companies in India, PROPERTY FINDER offers comprehensive real estate solutions. We are defined by trust and excellence with a commitment to customer satisfaction and technology.', '', ''),
(3, 'service', 'Property Finder - Premimum Real Estate Projects of Noida', '', 'One of the fastest growing companies in India, PROPERTY FINDER offers comprehensive real estate solutions. We are defined by trust and excellence with a commitment to customer satisfaction and technology.', '<script>header script</script>', '<script>footer script</script>'),
(4, 'contact', 'conatct us', '', '', '', ''),
(5, 'residentials', 'Residential Properties', '', '', '', ''),
(6, 'commericial', 'Commercial Properties', '', '', '', ''),
(7, 'career', 'Career Page', '', '', '', ''),
(8, 'blogs', 'Blog Page', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `micro_sections`
--

CREATE TABLE `micro_sections` (
  `id` int(11) NOT NULL,
  `micro_id` int(11) NOT NULL,
  `section_type` int(11) NOT NULL COMMENT '2=>price,3=>highlights 4, ametiese, 5 locations, 6=>plans,7=>gallery',
  `small_heading` longtext DEFAULT NULL,
  `heading` longtext DEFAULT NULL,
  `sub_heading` longtext DEFAULT NULL,
  `descriptions` longtext DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_sections`
--

INSERT INTO `micro_sections` (`id`, `micro_id`, `section_type`, `small_heading`, `heading`, `sub_heading`, `descriptions`, `image`) VALUES
(1, 1, 2, 'OUR PRICE LISTs', 'Available Spacessss', 'Our price list reflects this commitment, offering a range of packages designed to align with your preferences.ss', '', NULL),
(2, 1, 3, 'OUR HIGHLIGHTS										\r\n					', 'Perfect Spaces for Office Spaces', 'Our thoughtfully designed 2, 3, and 4 BHK floor plans offer a harmonious blend of space and functionality.', '', 'uploads/microsite/sections/sections-1695184650.jpg'),
(3, 1, 4, 'WHAT WE OFFER', 'Our Amenities', 'Indulge in a world where luxury meets functionality. Our array of amenities caters to your every need, creating an environment that harmonizes relaxation and convenience', NULL, 'uploads/microsite/sections/sections-1695107353.png'),
(4, 1, 6, 'LOCATION ADVANTAGE', 'Smart Living\'s Location Benefitss', 'Surrounded by a vibrant tapestry of amenities, your every need is met within minutes.', '', 'uploads/microsite/sections/sections-1695112480.jpg'),
(5, 1, 7, 'Our Gallery\r\n					', 'Exploring Our Artistic Havens', 'Exploring Our Artistic Haven', '', 'uploads/microsite/sections/sections-1695187568.jpg'),
(6, 1, 5, 'LOCATION ADVANTAGE', 'Smart Living\'s Location Benefits', 'Surrounded by a vibrant tapestry of amenities, your every need is met within minutes.', '', ''),
(7, 2, 6, 'tests					\r\n					', 'tests', 'asdfasdf', '', 'uploads/microsite/sections/sections-1695364815.jpg'),
(8, 3, 3, 'Best Benefits Available', 'in Gather of the main Benefits', 'Best Benefits Available', '', 'uploads/microsite/sections/sections-1695643239.jpg'),
(9, 3, 5, 'location', 'location main heading', 'location sub heading', '', ''),
(10, 3, 4, 'We have multiple Amenities Facilities available					\r\n					', 'These are our main Amenties', 'main Amenties sub Heading', '', 'uploads/microsite/sections/sections-1695644229.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site`
--

CREATE TABLE `micro_site` (
  `id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  `platter_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `locality_id` int(11) NOT NULL,
  `page_url` varchar(500) NOT NULL,
  `title` varchar(150) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `project_brochure` varchar(200) NOT NULL,
  `name` varchar(130) NOT NULL,
  `feature_image` varchar(500) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `payment_plan` varchar(100) DEFAULT NULL,
  `rera_no` varchar(100) NOT NULL,
  `agent_rera` varchar(255) DEFAULT NULL,
  `complitaion_date` date NOT NULL,
  `project_ivr_no` bigint(12) NOT NULL,
  `whatapp_no` bigint(12) NOT NULL,
  `hot_project` tinyint(1) DEFAULT 0,
  `emi_cal_status` tinyint(1) DEFAULT 1,
  `releated_id` varchar(100) DEFAULT '0',
  `near_sale_id` varchar(100) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `starting_price` varchar(500) DEFAULT NULL,
  `highlights` varchar(500) DEFAULT NULL,
  `amenities_banners` varchar(500) DEFAULT NULL,
  `discount_image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_site`
--

INSERT INTO `micro_site` (`id`, `developer_id`, `platter_id`, `cat_id`, `type_id`, `status_id`, `state_id`, `city_id`, `locality_id`, `page_url`, `title`, `keyword`, `description`, `project_brochure`, `name`, `feature_image`, `address`, `payment_plan`, `rera_no`, `agent_rera`, `complitaion_date`, `project_ivr_no`, `whatapp_no`, `hot_project`, `emi_cal_status`, `releated_id`, `near_sale_id`, `status`, `created_date`, `starting_price`, `highlights`, `amenities_banners`, `discount_image`) VALUES
(1, 29, 1, 2, 23, 3, 29, 1, 5, 'OMAXE-CHOWkmX1695039521', 'OMAXE CHOWk', 'OMAXE CHOWk', 'OMAXE CHOWk', '', 'OMAXE CHOWk', 'feature-image-2023-09-18-02-18-41.jpg', 'SECTOR 65, GURGAON', '', 'Rera24323232', 'dddddd', '0000-00-00', 22222222222222, 0, 0, 1, '0', '0', 1, '2023-09-20 07:21:12', '', NULL, NULL, 'uploads/microsite/discount/microsite-projects-discount-2023-09-19-01-33-50.png'),
(2, 29, 1, 2, 3, 2, 8, 5, 17, 'M3M-GOLF-ESTATEbO90jhuhG61695190954', 'UI/UX DESIGNER', 'Meta Keywor', 'UI/UX DESIGNERsss', '', 'M3M GOLF ESTATE', 'feature-image-2023-09-20-08-22-34.jpg', 'SECTOR 68, GURGAON', '', 'Rera24323232', '', '0000-00-00', 9718093729, 9718093729, 0, 1, '0', '0', 1, '2023-09-20 06:55:10', ' 2.5 Cr*', NULL, NULL, NULL),
(3, 22, 1, 2, 3, 3, 26, 6, 19, 'RahejafG1695641552', 'Raheja new property', 'Raheja new property', 'Raheja new property', '', 'Raheja', 'feature-image-2023-09-25-01-32-32.jpg', 'noida sec 15', '', 'ER98893/9839/93839', '', '0000-00-00', 9910537889, 9910537889, 0, 1, '0', '0', 1, '2023-09-25 11:32:32', '75 Lakh', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_amenities`
--

CREATE TABLE `micro_site_amenities` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `icons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `micro_site_amenities`
--

INSERT INTO `micro_site_amenities` (`id`, `project_id`, `title`, `subtitle`, `status`, `created_date`, `icons`) VALUES
(1, 1, 'CAR PARKING', '2100+ car parks, including valet service, for hassle-free shopping and dininga', 1, '2023-09-19 07:50:04', 5),
(2, 3, 'Floor wise parking', '', 1, '2023-09-25 12:13:36', 5),
(3, 3, 'CCTV Camera with security guards', '', 1, '2023-09-25 12:14:01', 6),
(4, 3, '24 hr water supply', '', 1, '2023-09-25 12:14:19', 8);

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_banner`
--

CREATE TABLE `micro_site_banner` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `win_images` text NOT NULL,
  `win_video_url` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `micro_site_banner`
--

INSERT INTO `micro_site_banner` (`id`, `project_id`, `win_images`, `win_video_url`, `status`, `created_date`) VALUES
(1, 1, 'banners-1695040181.jpg', '', 1, '2023-09-18 12:29:41'),
(2, 3, 'banners-1695641662.jpg', '', 1, '2023-09-25 11:34:22'),
(3, 3, 'banners-1695641677.jpg', '', 1, '2023-09-25 11:34:37'),
(4, 3, 'banners-1695641697.jpg', '', 1, '2023-09-25 11:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_builder`
--

CREATE TABLE `micro_site_builder` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `total_project` int(10) NOT NULL,
  `com_project` int(10) NOT NULL,
  `con_project` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_floorplan`
--

CREATE TABLE `micro_site_floorplan` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `protected` int(11) NOT NULL DEFAULT 0,
  `project_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `micro_site_floorplan`
--

INSERT INTO `micro_site_floorplan` (`id`, `title`, `protected`, `project_id`, `image`, `status`, `created_date`) VALUES
(1, 'Ground Floor', 0, 1, 'uploads/microsite/floors/floors-1695114431.jpg', 1, '2023-09-19 09:07:11'),
(2, 'Ground Floor2', 0, 1, 'uploads/microsite/floors/floors-1695186799.jpg', 1, '2023-09-20 05:13:19'),
(3, 'Tower B', 0, 1, 'uploads/microsite/floors/floors-1695186825.jpg', 1, '2023-09-20 05:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_gallery`
--

CREATE TABLE `micro_site_gallery` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `imagealt` longtext DEFAULT NULL,
  `imgtitle` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `micro_site_gallery`
--

INSERT INTO `micro_site_gallery` (`id`, `project_id`, `image`, `status`, `created_date`, `imagealt`, `imgtitle`) VALUES
(2, 1, 'uploads/microsite/gallery/gallery-1695112650.jpg', 1, '2023-09-19 08:37:30', NULL, NULL),
(3, 1, 'uploads/microsite/gallery/gallery-1695112658.jpg', 1, '2023-09-19 08:37:38', NULL, NULL),
(4, 1, 'uploads/microsite/gallery/gallery-1695112668.jpg', 1, '2023-09-19 08:37:48', NULL, NULL),
(5, 1, 'uploads/microsite/gallery/gallery-1695112673.jpg', 1, '2023-09-19 08:37:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_highlights`
--

CREATE TABLE `micro_site_highlights` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `meter` varchar(20) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_site_highlights`
--

INSERT INTO `micro_site_highlights` (`id`, `project_id`, `meter`, `destination`, `status`, `created_date`) VALUES
(1, 1, '', 'Daily footfall in Chandni Chowk is 6 to 8 lakhs includingss tourists', 1, '2023-09-19 06:22:29'),
(2, 1, '', 'Multi-Level Parking for 2100+ cars and 81 tourists Buses', 1, '2023-09-19 06:22:29'),
(3, 1, '', '3.3 lakh sq. ft. space for Retail including 1.2 lakh sq. ft. for Food Court', 1, '2023-09-19 06:22:29'),
(4, 1, '', 'Omaxe Chowk will be the Gateway to Asia’s Largest Wholesale & Retail Market', 1, '2023-09-19 06:22:29'),
(5, 3, '', 'Nearby Firebrigate Station', 1, '2023-09-25 12:01:59'),
(6, 3, '', '5 Petrol pumps', 1, '2023-09-25 12:01:59'),
(7, 3, '', 'All Indiian Women Hockey University', 1, '2023-09-25 12:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_key_highlights`
--

CREATE TABLE `micro_site_key_highlights` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `descriptions` longtext NOT NULL,
  `seq` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_site_key_highlights`
--

INSERT INTO `micro_site_key_highlights` (`id`, `project_id`, `descriptions`, `seq`, `status`) VALUES
(1, 1, 'New Launchss', 1, 1),
(2, 1, 'HYBRID Retail', 1, 1),
(3, 1, 'Excellent Saleable Area (sqft)', 1, 1),
(4, 3, 'Hurry Now', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_location`
--

CREATE TABLE `micro_site_location` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `iframe` text NOT NULL,
  `descriptions` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `micro_site_location`
--

INSERT INTO `micro_site_location` (`id`, `project_id`, `image`, `iframe`, `descriptions`, `status`, `created_date`) VALUES
(1, 1, 'location-img-32-19-09-2023-09-58-33.png', '', NULL, 1, '2023-09-19 07:58:33'),
(2, 3, 'location-img-278-25-09-2023-02-08-47.png', '', NULL, 1, '2023-09-25 12:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_location_list`
--

CREATE TABLE `micro_site_location_list` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `destination` varchar(180) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `micro_site_location_list`
--

INSERT INTO `micro_site_location_list` (`id`, `project_id`, `destination`, `status`, `created_date`) VALUES
(1, 1, 'Opposite To Sis Ganj Gurudwara', 1, '2023-09-19 07:59:19'),
(2, 1, 'Near Old Delhi Railway Stations', 1, '2023-09-19 07:59:24'),
(3, 1, 'Adjacent To Chandni Chowk Metro Station', 1, '2023-09-19 07:59:19'),
(4, 1, 'Situated On The 100 Ft Wide HC Sen Marg', 1, '2023-09-19 07:59:19'),
(5, 3, 'asdfsaf', 1, '2023-09-25 12:11:01'),
(6, 3, 'test 2', 1, '2023-09-25 12:10:49'),
(7, 3, 'test 3', 1, '2023-09-25 12:10:49'),
(8, 3, 'test 4', 1, '2023-09-25 12:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_overview`
--

CREATE TABLE `micro_site_overview` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `heading` longtext DEFAULT NULL,
  `subheading` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image_heading` varchar(500) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `iconid1` varchar(250) DEFAULT NULL,
  `iconid2` varchar(250) DEFAULT NULL,
  `icon_heading1` varchar(250) DEFAULT NULL,
  `icon_heading2` varchar(250) DEFAULT NULL,
  `icon_subheading1` varchar(250) DEFAULT NULL,
  `icon_subheading2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_site_overview`
--

INSERT INTO `micro_site_overview` (`id`, `project_id`, `description`, `heading`, `subheading`, `status`, `image_heading`, `image`, `created_date`, `iconid1`, `iconid2`, `icon_heading1`, `icon_heading2`, `icon_subheading1`, `icon_subheading2`) VALUES
(4, 1, '<p>Omaxe Chandni Chowk Offers Best Retails Shops, Food Court & Commercial Spaces & Multi-level Car Parking. Give wings to your business! Explore the most strategic retail shops at Omaxe Chandni Chowk! Omaxe Ltd – one of the smartest real estate players in NCR have intelligently designed the commercial spaces at Katra Neel Chandni Chowk under this new commercial project. Aim is to offer you with possibilities to widen your businesses at this commercial centre of Old Delhi. This place is known to be the heart centre of the city well connected with other localities.<br /></p>', 'Discover the area of luxury', 'Omax Chowk - Chandni Chowk, Delhi', 1, 'We create comfort & elegance', 'uploads/platters/overview-1695113897.jpg', '2023-09-19 08:59:38', '5', '6', '3.3', '1.2', 'Lakh Sq.Ft. Space\r\nFor Retail', 'Lakh Sq.Ft. Space\r\nFor Food Courts'),
(5, 3, '<p>in Gautam Budh Nagar<br /></p>', 'in Gautam Budh Nagar', 'in Gautam Budh Nagar', 1, 'Plots in Noida sec 15', 'uploads/platters/overview-1695643020.jpg', '2023-09-25 11:59:01', '5', '6', 'Car Parking', 'CCTV Cameras', 'Block Wise Car Parking', 'Double Layer Security');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_price_insight`
--

CREATE TABLE `micro_site_price_insight` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `typology` varchar(80) NOT NULL,
  `l_size` varchar(80) NOT NULL,
  `size_type` varchar(20) NOT NULL,
  `size_h` varchar(80) NOT NULL,
  `price_l` varchar(80) NOT NULL,
  `price_h` varchar(20) NOT NULL,
  `price_type` varchar(80) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_site_price_insight`
--

INSERT INTO `micro_site_price_insight` (`id`, `project_id`, `typology`, `l_size`, `size_type`, `size_h`, `price_l`, `price_h`, `price_type`, `status`, `created_date`) VALUES
(6, 1, '1', '', '', '', '201', '', '1', 1, '2023-09-19 12:09:44'),
(7, 1, '12', '20', '1', '', '2', '', '2', 1, '2023-09-19 12:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_price_list`
--

CREATE TABLE `micro_site_price_list` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `years` int(5) NOT NULL,
  `quartly` varchar(20) NOT NULL,
  `price_per_sq` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `current_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_query`
--

CREATE TABLE `micro_site_query` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `project` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_site_query`
--

INSERT INTO `micro_site_query` (`id`, `name`, `project`, `email`, `phone`, `message`, `status`, `created_date`) VALUES
(2, 'degu', '1', 'degu@gmail.com', 989484934, 'hi tesing of', 1, '2023-09-20 10:43:37'),
(3, 'samuel', '1', 'admin@gmail.com', 98989494994, 'qswdfghjkl', 1, '2023-09-20 11:26:43'),
(4, 'sandeepsdfdff', '2', 'k@gmail.com', 98494839348, 'wedrftghj', 1, '2023-09-20 11:27:27'),
(5, 'mesage', 'OMAXE CHOWk', 'mesage@gmail.com', 9884948394, 'apartments', 1, '2023-09-20 11:55:56'),
(6, 'jacky', '2', 'jacky@gmail.com', 9849489343, 'i asdfasdf', 1, '2023-09-20 11:57:11'),
(7, 'questions', '1', 'questions@gmail.com', 949303940394, 'rera certificate of the nationa', 1, '2023-09-20 12:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `micro_site_transaction`
--

CREATE TABLE `micro_site_transaction` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `sold_price` varchar(80) NOT NULL,
  `registry_date` varchar(20) NOT NULL,
  `area` varchar(60) NOT NULL,
  `floor` varchar(80) NOT NULL,
  `price` varchar(80) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `micro_specifications`
--

CREATE TABLE `micro_specifications` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `heading` varchar(500) DEFAULT NULL,
  `descriptions` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro_specifications`
--

INSERT INTO `micro_specifications` (`id`, `project_id`, `heading`, `descriptions`, `status`, `created_at`) VALUES
(2, 2, 'WALLS/CEILING', 'POP Punning/Gyp Plaster with Acrylic Emulsion Paint on Walls & Ceiling\r\nCombination of Premium Tiles & POP Punning/Gyp Plaster with Acrylic Emulsion Paint on Walls', 1, '2023-09-05 15:41:07'),
(3, 2, 'CCTV SURVEILLANCE', 'CCTV for basements, ground floor, lobbies, entry and exit to the development. Automatic boom barriers and manual gates at entry and exits, intelligent access control system, panic alarm button is installed in master bedroom and a video door phone near apartment entrance.', 1, '2023-09-05 15:54:56'),
(4, 4, 'WALLS/CEILING', 'POP Punning/Gyp Plaster with Acrylic Emulsion Paint on Walls & Ceiling', 1, '2023-09-08 12:40:32'),
(5, 4, 'CCTV SURVEILLANCE', 'CCTV for basements, ground floor, lobbies, entry and exit to the development. Automatic boom barriers and manual gates at entry and exits, intelligent access control system, panic alarm button is installed in master bedroom and a video door phone near apartment entrance.', 1, '2023-09-08 12:40:59'),
(6, 4, 'FLOOR', 'Master Bedroom: Imported Brand Marble/Engineered Wooden Flooring\r\nOther Bedroom: Engineered Wooden Flooring', 1, '2023-09-08 12:41:15'),
(7, 4, 'POWER BACKUP', '100% Power backup with suitable diversity and load factor per apartment, round-the-clock treated water supply & all systems for fire safety as per norms', 1, '2023-09-08 12:41:35'),
(8, 4, 'DOORS & WINDOWS/GLAZING', 'Internal Door: 2.4 meter High Flush Shutters with Polished Veneer\r\nWindows: Aluminium Window Frames with Combination of Double/Single Glazed Panels', 1, '2023-09-08 12:41:51'),
(9, 5, 'BEDROOMS', 'Walls: Plastic emulsion with Roller finish.\r\nFloors: Laminated wooden flooring.\r\nDoors: Hard wood door frame with Flush Shutter\r\nCelling: Plastic emulsion.', 1, '2023-09-09 11:58:35'),
(10, 5, 'LIVING/DINING ROOM', 'Walls: Plastic emulsion with Roller finish.\r\nVitrified tiles\r\nDoors: Hard wood door frame with Flush Shutter\r\nCelling: Plastic emulsion.', 1, '2023-09-09 11:58:44'),
(11, 5, 'KITCHEN', 'Walls: 2\' high ceramic tiles above counter, balance oil bound distemper paint.\r\nDoors: Hard wood door frame with Flush Shutter\r\nCellings: Oil Bound distemper paint.\r\nOthers: Polished granite counter with SS sink and CP fittings.', 1, '2023-09-09 11:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `image` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `shortDesc` text NOT NULL,
  `description` varchar(11000) NOT NULL,
  `blogDate` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `large_image` varchar(500) DEFAULT NULL,
  `mobile_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `heading`, `shortDesc`, `description`, `blogDate`, `status`, `createdDate`, `large_image`, `mobile_image`) VALUES
(1, 'test', 'test', 'test', '', '5 Ways to Live Life peacefully', 'This policy is applicable to all ongoing SCDRO Single Family Housing Program activities as detailed', '<p>This policy is applicable to all ongoing SCDRO Single Family Housing Program activities as detailed in the Action Plans, SCDRO’s Housing Recovery Programs Policy and Procedures Manuals (Manuals), and this Policy and SOP.</p>\n', '2023-09-26', 1, '2023-09-25 07:57:23.844438', 'blog-l852301182.png', 'blog-m1119621534.png'),
(2, 'test2', 'testa asdf asf asdf sdfasdf sdf', 'test2', '', 'India Canada News LIVE Updates:', 'News: Read latest News and updates on politics, auto, technology, mutual fund and more on mint. Get comprehensive up-to-date news coverage from India and ...', '<p>This picture taken on April 24, 2023 shows Park Ji-eun, CEO of artificial intelligence company Pulse9, speaking as virtual humans are seen on a screen during an interview with AFP at her company in Seoul. Pulse9 has created digital humans for some of South Korea&#39;s largest conglomerates, with research indicating the global market for such life-like creations could reach 527 billion USD by 2030. (Photo by Jung Yeon-je / AFP) /&nbsp;<strong>(AFP)</strong></p>\r\n', '2023-09-25', 1, '2023-09-25 06:45:09.961455', 'blog-l1613983462.jpg', 'blog-m1050135024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nri_service`
--

CREATE TABLE `nri_service` (
  `id` int(11) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `image` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `shortDesc` text NOT NULL,
  `description` varchar(11000) NOT NULL,
  `blogDate` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `large_image` varchar(500) DEFAULT NULL,
  `mobile_image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nri_service`
--

INSERT INTO `nri_service` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `image`, `heading`, `shortDesc`, `description`, `blogDate`, `status`, `createdDate`, `large_image`, `mobile_image`) VALUES
(1, 'test', 'asdfasd fasdf asdf asdsfasdf asdf asdf asdf', 'test', '', 'NRI SERVICES', 'Letters of Intent, Lease and Contract Negotiations, Lease Administration, Portfolio Optimization and Management, Restructuring and Renegotiations, Renewals, Dispositions, Due Diligence, and Document Abstraction...', '<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2023-09-26', 1, '2023-09-25 09:55:37.243422', 'nri-l1049637597.jpg', ''),
(3, 'test', 'teste', 'test', '', 'NRI SERVICES', 'Letters of Intent, Lease and Contract Negotiations, Lease Administration, Portfolio Optimization and Management, Restructuring and Renegotiations, Renewals, Dispositions, Due Diligence, and Document Abstraction...', '<p>Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2023-09-19', 1, '2023-09-25 09:58:02.874438', 'nri-l532735245.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `other_icons`
--

CREATE TABLE `other_icons` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_icons`
--

INSERT INTO `other_icons` (`id`, `icon`, `name`) VALUES
(5, 'icons/parking.png', 'CAR PARKING'),
(6, 'icons/security-camera.png', '24/7 Security'),
(7, 'icons/metro.png', 'Direct Access Metro'),
(8, 'icons/aisle.png', 'Wide Corridors'),
(9, 'icons/food-court.png', 'Food Stall'),
(10, 'icons/shop.png', 'Shop');

-- --------------------------------------------------------

--
-- Table structure for table `other_type_section_item`
--

CREATE TABLE `other_type_section_item` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `other_type_section_type` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_type_section_item`
--

INSERT INTO `other_type_section_item` (`id`, `project_id`, `other_type_section_type`, `heading`, `status`, `created_at`) VALUES
(5, 2, 1, '4.10 CRS', 1, '2023-09-05 15:10:40'),
(6, 2, 1, 'sgsfsd', 1, '2023-09-05 18:09:57'),
(7, 4, 1, '4.10 CRS', 1, '2023-09-08 12:33:17'),
(8, 4, 2, 'READY TO MOVE', 1, '2023-09-08 12:33:26'),
(9, 4, 3, 'WALLS/CEILING', 1, '2023-09-08 12:33:31'),
(10, 4, 4, 'CCTV SURVEILLANCE', 1, '2023-09-08 12:33:35'),
(11, 5, 1, '4.10 CRS', 1, '2023-09-09 11:57:18'),
(12, 5, 2, 'WALLS/CEILING', 1, '2023-09-09 11:57:26'),
(13, 5, 3, 'READY TO MOVE', 1, '2023-09-09 11:57:33'),
(14, 5, 4, '3 | 4 BHK APP', 1, '2023-09-09 11:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `platter_page`
--

CREATE TABLE `platter_page` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `page_url` varchar(500) NOT NULL,
  `meta_title` varchar(150) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `meta_description` text NOT NULL,
  `name` varchar(130) NOT NULL,
  `agent_rera` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `starting_price` varchar(500) DEFAULT NULL,
  `discount_image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `platter_page`
--

INSERT INTO `platter_page` (`id`, `cat_id`, `type_id`, `page_url`, `meta_title`, `meta_keyword`, `meta_description`, `name`, `agent_rera`, `status`, `created_date`, `starting_price`, `discount_image`) VALUES
(1, 2, 38, 'Centera-Park', 'Meta ', 'Meta Keywo', '   Meta Descr   ', 'Centera Park', 'dddddd', 1, '2023-09-19 09:44:59', '2.5 Cr*', 'uploads/platters/discount/discount-1695116389.png'),
(3, 2, 38, 'Omax', 'Omax ', 'Omax', '  Omax', 'Omax', 'UPRERAAGT21762', 1, '2023-09-19 10:41:07', ' 2.5 Cr*', 'uploads/platters/discount/discount-1695038619.png');

-- --------------------------------------------------------

--
-- Table structure for table `platter_site_banner`
--

CREATE TABLE `platter_site_banner` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `desktop_image` text NOT NULL,
  `mobile_banner` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `platter_site_banner`
--

INSERT INTO `platter_site_banner` (`id`, `project_id`, `desktop_image`, `mobile_banner`, `status`, `created_date`, `updated_at`) VALUES
(4, 1, 'uploads/platters/banners/banners-desktop-1695116398.jpg', 'uploads/platters/banners/banners-mobile-1695116398.jpg', 1, '2023-09-19 09:39:58', NULL),
(5, 3, 'uploads/platters/banners/banners-desktop-1695120050.jpg', 'uploads/platters/banners/banners-mobile-1695120050.jpg', 1, '2023-09-19 10:40:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `platter_site_stripe`
--

CREATE TABLE `platter_site_stripe` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `desktop_image` text NOT NULL,
  `mobile_banner` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `platter_site_stripe`
--

INSERT INTO `platter_site_stripe` (`id`, `project_id`, `desktop_image`, `mobile_banner`, `status`, `created_date`, `updated_at`) VALUES
(2, 1, 'uploads/platters/stripe/stripe-1695117656.jpg', 'uploads/platters/stripe/stripe-mobile-1695117429.jpg', 1, '2023-09-19 10:00:56', '2023-09-19 12:00:PM');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatus`
--

CREATE TABLE `projectstatus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectstatus`
--

INSERT INTO `projectstatus` (`id`, `name`, `status`, `createdDate`) VALUES
(1, 'Ready To Move', 1, '2023-07-19 19:02:59.338872'),
(2, 'Under Construction', 1, '2023-07-19 19:02:59.603302'),
(3, 'New Launch', 1, '2023-07-19 19:02:59.851844');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `cat_id`, `name`, `date`) VALUES
(1, '1', 'Residential Apartment', '2023-08-04 20:32:38'),
(2, '1', 'Independent House/Villa', '2023-08-04 20:32:49'),
(3, '2', 'Residential Land', '2023-08-04 20:32:56'),
(4, '1', 'Independent/ builder Floor', '2023-08-04 20:33:50'),
(5, '1', 'Farm House', '2023-08-04 20:34:02'),
(6, '2', 'Commercial Shops', '2023-08-04 20:34:12'),
(7, '1', 'land', '2023-08-16 11:53:54'),
(8, '1', 'areaa', '2023-08-25 14:32:31'),
(9, '3', '2 BHK & 2 BHK + STUDY', '2023-09-09 12:47:46'),
(10, '1', '4 BHK', '2023-09-11 12:42:33'),
(11, '1', '3 BHK', '2023-09-11 12:40:54'),
(12, '3', '3/4 BHK Luxury Apartments & Penthouse', '2023-09-12 07:02:32'),
(13, '3', '3 BHK Apartment', '2023-09-12 07:03:12'),
(14, '3', '4 BHK Apartment', '2023-09-12 07:03:21'),
(15, '3', 'PENTHOUSE', '2023-09-12 07:03:35'),
(16, '3', 'SOCIETY SHOPS', '2023-09-12 07:03:45'),
(17, '1', '4 & 5 BHK Apartments', '2023-09-12 10:26:56'),
(18, '1', '4 BHK + 4T', '2023-09-12 10:27:21'),
(19, '1', '4 BHK + 4T + 2U', '2023-09-12 10:27:28'),
(20, '1', '5 BHK + 5T + 3U', '2023-09-12 10:27:35'),
(21, '1', 'kalpataru Vista', '2023-09-12 11:00:01'),
(22, '1', '3 & 4 BHK Apartments', '2023-09-12 11:02:47'),
(23, '2', '3.5, 4.5 & 5.5 BHK Apartments', '2023-09-12 11:35:34'),
(24, '1', '4.5 BHK APARTMENTS', '2023-09-13 10:50:37'),
(25, '1', 'Gulshan Dynasty', '2023-09-13 11:29:50'),
(26, '1', '4 BHK Apartments', '2023-09-13 11:32:13'),
(27, '1', 'Gulshan', '2023-09-13 11:47:50'),
(28, '1', 'CRC Joyous', '2023-09-13 12:12:18'),
(29, '1', '4 BHK + 4T + 2U', '2023-09-14 06:41:31'),
(30, '1', '5 BHK + 5T + 3U', '2023-09-14 06:42:26'),
(31, '1', '4.5 BHK Regular', '2023-09-14 10:21:35'),
(32, '1', '4.5 BHK Large', '2023-09-14 10:21:48'),
(33, '1', '4 BHK + T', '2023-09-14 11:25:32'),
(34, '1', '2 BHK', '2023-09-14 12:07:52'),
(35, '1', '2BHK + Study', '2023-09-14 12:08:00'),
(36, '1', '3BHK + 3T', '2023-09-14 12:08:08'),
(37, '2', 'Retail Shop', '2023-09-19 05:51:06'),
(38, '2', '1, 2, 3 & 4 BHK APARTMENTS, VILLAS & PLOTS', '2023-09-19 09:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `property_query`
--

CREATE TABLE `property_query` (
  `id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  `page_url` varchar(500) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `property_name` varchar(140) NOT NULL,
  `property_address` varchar(250) NOT NULL,
  `property_type_modal` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_query`
--

INSERT INTO `property_query` (`id`, `developer_id`, `page_url`, `name`, `email`, `description`, `property_name`, `property_address`, `property_type_modal`, `status`, `created_date`) VALUES
(0, 19, 'http://dev.chaahathomesinfratech.com/micro-page-details.php?type=commercial&page_url=M3M-GOLF-ESTATEeP1694154327', 'erirc', 'eric@gmail.com', 'asfasfasdfadfYes | I am interested', 'M3M GOLF ESTATE', 'SECTOR 65, GURGAON', 'Residential Land', 1, '2023-09-11 11:16:21'),
(0, 19, 'http://dev.chaahathomesinfratech.com/micro-page-details.php?type=commercial&page_url=M3M-GOLF-ESTATEeP1694154327', 'erirc', 'eric@gmail.com', 'Yes | I am qwrfqwrinterested', 'M3M GOLF ESTATE', 'SECTOR 65, GURGAON', 'Residential Land', 1, '2023-09-11 11:22:15'),
(0, 19, 'http://dev.chaahathomesinfratech.com/micro-page-details.php?type=commercial&page_url=M3M-GOLF-ESTATEeP1694154327', 'brochure5656', 'brochure@gmail.com', 'Yes | I am interested', 'M3M GOLF ESTATE', 'SECTOR 65, GURGAON', 'Residential Land', 1, '2023-09-11 11:23:41'),
(0, 19, 'http://dev.chaahathomesinfratech.com/micro-page-details.php?type=commercial&page_url=M3M-GOLF-ESTATEeP1694154327', 'meghan', 'meghan@gmail.com', 'Yes | I am interested', 'M3M GOLF ESTATE', 'SECTOR 65, GURGAON', 'Residential Land', 1, '2023-09-11 11:24:32'),
(0, 24, 'http://dev.chaahathomesinfratech.com/micro-page-details.php?type=featured&page_url=Parx-Laureatery1694503010', 'faiz ', 'faizkhan1466@gmail.com', 'asfa', 'Parx Laureate', 'Sector-108, Noida', '3/4 BHK Luxury Apartments & Penthouse', 1, '2023-09-12 07:31:51'),
(0, 19, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=commercial&page_url=M3M-GOLF-ESTATEeP1694154327', 'test by gtf', 'testgtf@gmail.com', 'Test By Gtf', 'M3M GOLF ESTATE', 'SECTOR 65, GURGAON', 'Residential Land', 1, '2023-09-13 07:39:00'),
(0, 22, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Ambience-TivertonLh1694431475', 'Test By GTF', 'testgtf@gmail.com', 'test by gtf', 'Ambience Tiverton', 'Sector - 50, Noida', 'Residential Apartment', 1, '2023-09-15 11:22:58'),
(0, 22, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Ambience-TivertonLh1694431475', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Ambience Tiverton', 'Sector - 50, Noida', 'Residential Apartment', 1, '2023-09-15 11:24:01'),
(0, 22, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Ambience-TivertonLh1694431475', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Ambience Tiverton', 'Sector - 50, Noida', 'Residential Apartment', 1, '2023-09-15 11:24:13'),
(0, 22, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Ambience-TivertonLh1694431475', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Ambience Tiverton', 'Sector - 50, Noida', 'Residential Apartment', 1, '2023-09-15 11:24:22'),
(0, 24, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Parx-Laureatery1694503010', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Parx Laureate', 'Sector-108, Noida', '4 BHK Apartments', 1, '2023-09-15 11:25:00'),
(0, 24, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Parx-Laureatery1694503010', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Parx Laureate', 'Sector-108, Noida', '4 BHK Apartments', 1, '2023-09-15 11:25:13'),
(0, 24, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Parx-Laureatery1694503010', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Parx Laureate', 'Sector-108, Noida', '4 BHK Apartments', 1, '2023-09-15 11:25:40'),
(0, 25, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=County-107h71694515537', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'County 107', 'SECTOR 107, NOIDA', '4 & 5 BHK Apartments', 1, '2023-09-15 11:26:06'),
(0, 25, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=County-107h71694515537', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'County 107', 'SECTOR 107, NOIDA', '4 & 5 BHK Apartments', 1, '2023-09-15 11:26:15'),
(0, 25, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=County-107h71694515537', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'County 107', 'SECTOR 107, NOIDA', '4 & 5 BHK Apartments', 1, '2023-09-15 11:26:46'),
(0, 26, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Kalpataru-VistaQi1694517494', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Kalpataru Vista', 'Sector - 128, Wish Toen, Noida', '3 & 4 BHK Apartments', 1, '2023-09-15 11:39:49'),
(0, 26, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Kalpataru-VistaQi1694517494', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Kalpataru Vista', 'Sector - 128, Wish Toen, Noida', '3 & 4 BHK Apartments', 1, '2023-09-15 11:42:52'),
(0, 28, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Max-EstatesiK1694603779', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Max Estates', 'SECTOR 128, NOIDA', '4.5 BHK APARTMENTS', 1, '2023-09-15 11:43:24'),
(0, 28, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Max-EstatesiK1694603779', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Max Estates', 'SECTOR 128, NOIDA', '4.5 BHK APARTMENTS', 1, '2023-09-15 11:44:12'),
(0, 28, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Max-EstatesiK1694603779', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Max Estates', 'SECTOR 128, NOIDA', '4.5 BHK APARTMENTS', 1, '2023-09-15 11:44:20'),
(0, 28, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Max-EstatesiK1694603779', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Max Estates', 'SECTOR 128, NOIDA', '4.5 BHK APARTMENTS', 1, '2023-09-15 11:44:25'),
(0, 28, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Max-EstatesiK1694603779', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Max Estates', 'SECTOR 128, NOIDA', '4.5 BHK APARTMENTS', 1, '2023-09-15 11:44:40'),
(0, 29, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Dynasty551694605263', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Dynasty', 'Sector 144, Noida', '4 BHK Apartments', 1, '2023-09-15 11:46:11'),
(0, 29, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Dynasty551694605263', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Dynasty', 'Sector 144, Noida', '4 BHK Apartments', 1, '2023-09-15 11:46:35'),
(0, 29, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Dynasty551694605263', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Dynasty', 'Sector 144, Noida', '4 BHK Apartments', 1, '2023-09-15 11:47:00'),
(0, 29, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Dynasty551694605263', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Dynasty', 'Sector 144, Noida', '4 BHK Apartments', 1, '2023-09-15 11:47:09'),
(0, 30, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Avante', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Avante', 'Noida Extension', '4 BHK Apartments', 1, '2023-09-15 11:49:36'),
(0, 30, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Avante', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Avante', 'Noida Extension', '4 BHK Apartments', 1, '2023-09-15 11:49:44'),
(0, 30, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Avante', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Avante', 'Noida Extension', '4 BHK Apartments', 1, '2023-09-15 11:49:59'),
(0, 30, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Gulshan-Avante', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Gulshan Avante', 'Noida Extension', '4 BHK Apartments', 1, '2023-09-15 11:50:14'),
(0, 31, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=CRC-Joyous2X1694607983', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'CRC Joyous', 'Greater Noida West', 'CRC Joyous', 1, '2023-09-15 11:50:54'),
(0, 31, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=CRC-Joyous2X1694607983', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'CRC Joyous', 'Greater Noida West', 'CRC Joyous', 1, '2023-09-15 11:51:04'),
(0, 31, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=CRC-Joyous2X1694607983', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'CRC Joyous', 'Greater Noida West', 'CRC Joyous', 1, '2023-09-15 11:51:14'),
(0, 31, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=CRC-Joyous2X1694607983', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'CRC Joyous', 'Greater Noida West', 'CRC Joyous', 1, '2023-09-15 11:51:14'),
(0, 31, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=CRC-Joyous2X1694607983', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'CRC Joyous', 'Greater Noida West', 'CRC Joyous', 1, '2023-09-15 11:51:22'),
(0, 27, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=commercial&page_url=M3M-The-CullinanMd1694519555', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'M3M The Cullinan', 'Sector-94, Noida', 'Commercial Shops', 1, '2023-09-15 11:51:45'),
(0, 27, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=commercial&page_url=M3M-The-CullinanMd1694519555', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'M3M The Cullinan', 'Sector-94, Noida', 'Commercial Shops', 1, '2023-09-15 11:55:44'),
(0, 26, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Kalpataru-VistaQi1694517494', 'Test By GTF', 'testgtf@gmail.com', 'test by gtf', 'Kalpataru Vista', 'Sector - 128, Wish Toen, Noida', '3 & 4 BHK Apartments', 1, '2023-09-18 04:55:53'),
(0, 26, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=residential&page_url=Kalpataru-VistaQi1694517494', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'Kalpataru Vista', 'Sector - 128, Wish Toen, Noida', '3 & 4 BHK Apartments', 1, '2023-09-18 05:04:13'),
(0, 27, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=commercial&page_url=M3M-The-CullinanMd1694519555', 'Test By GTF', 'testgtf@gmail.com', 'Test By GTF', 'M3M The Cullinan', 'Sector-94, Noida', 'Commercial Shops', 1, '2023-09-18 05:05:31'),
(0, 27, 'http://propertyfinder.org.in/testing/micro-page-details.php?type=commercial&page_url=M3M-The-CullinanMd1694519555', 'Test By GTF', 'testgtf@gmail.com', 'Testing Form', 'M3M The Cullinan', 'Sector-94, Noida', 'Commercial Shops', 1, '2023-09-18 05:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `spec_id` int(11) DEFAULT NULL,
  `page_url` varchar(250) NOT NULL,
  `meta_title` varchar(200) DEFAULT NULL,
  `meta_keywords` varchar(500) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `feature` varchar(300) DEFAULT NULL,
  `feature_alt_tag` varchar(200) DEFAULT NULL,
  `thumbnails` varchar(300) DEFAULT NULL,
  `thumbnail_alt_tag` varchar(200) DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `spec_id`, `page_url`, `meta_title`, `meta_keywords`, `meta_description`, `feature`, `feature_alt_tag`, `thumbnails`, `thumbnail_alt_tag`, `title`, `description`, `status`, `created_date`) VALUES
(3, NULL, 'Legal-Services', 'Legal Services', '', 'Get expert legal help for all property-related matters', 'uploads/services/service-feature-1694778186.jpg', 'Legal Services', 'uploads/services/service-thumbnail-1694778186.jpg', 'Legal Services', 'Legal Services', '<p>Get expert legal help for all property-related matters</p>\r\n', 1, '2023-09-15 11:43:06'),
(4, NULL, 'Buy-Property', 'Buy Property', '', 'Browse residential properties for buy in Noida - Fresh Booking, Ready To Move in Apartments', 'uploads/services/service-feature-1694778594.jpg', 'Buy Property', 'uploads/services/service-thumbnail-1694778594.jpg', 'Buy Property', 'Buy Property', '<p>Browse residential properties for buy in Noida - Fresh Booking, Ready To Move in Apartments</p>\r\n', 1, '2023-09-15 11:49:54'),
(5, NULL, 'Lease-Property', 'Lease Property', '', 'Choose the commercial property on lease of your choice from a wide variety of options available in Noida', 'uploads/services/service-feature-1694778697.jpg', 'Lease Property', 'uploads/services/service-thumbnail-1694778697.jpg', 'Lease Property', 'Lease Property', '<p>Choose the commercial property on lease of your choice from a wide variety of options available in Noida</p>\r\n', 1, '2023-09-15 11:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `status`, `created_date`) VALUES
(1, 'Andhra Pradesh', 1, '2023-08-03 12:44:08'),
(2, 'Arunachal Pradesh', 1, '2023-08-03 12:44:14'),
(3, 'Assam', 1, '2023-08-03 12:44:20'),
(4, 'Bihar', 1, '2023-08-03 12:44:26'),
(5, 'Chhattisgarh', 1, '2023-08-03 12:44:32'),
(6, 'Goa', 1, '2023-08-03 12:44:38'),
(7, 'Gujarat', 1, '2023-08-03 12:44:43'),
(8, 'Haryana', 1, '2023-08-03 12:44:48'),
(9, 'Himachal Pradesh', 1, '2023-08-03 12:44:53'),
(10, 'Jharkhand', 1, '2023-08-03 12:44:58'),
(11, 'Karnataka', 1, '2023-08-03 12:45:03'),
(12, 'Kerala', 1, '2023-08-03 12:45:08'),
(13, 'Madhya Pradesh', 1, '2023-08-03 12:45:13'),
(14, 'Maharashtra', 1, '2023-08-03 12:45:19'),
(15, 'Manipur', 1, '2023-08-03 12:45:23'),
(16, 'Meghalaya', 1, '2023-08-03 12:45:29'),
(17, 'Mizoram', 1, '2023-08-03 12:45:36'),
(18, 'Nagaland', 1, '2023-08-03 12:45:42'),
(19, 'Odisha', 1, '2023-08-03 12:45:47'),
(20, 'Punjab', 1, '2023-08-03 12:45:51'),
(21, 'Rajasthan', 1, '2023-08-03 12:45:56'),
(22, 'Sikkim', 1, '2023-08-03 12:46:01'),
(23, 'Tamil Nadu', 1, '2023-08-03 12:46:07'),
(24, 'Telangana', 1, '2023-08-03 12:46:11'),
(25, 'Tripura', 1, '2023-08-03 12:46:16'),
(26, 'Uttar Pradesh', 1, '2023-08-03 12:46:22'),
(27, 'Uttarakhand', 1, '2023-08-03 12:46:27'),
(28, 'West Bengal', 1, '2023-08-03 12:46:32'),
(29, 'Delhi', 1, '2023-08-03 12:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_emp`
--

CREATE TABLE `testimonials_emp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials_emp`
--

INSERT INTO `testimonials_emp` (`id`, `name`, `image`, `designation`, `description`, `status`, `createdDate`) VALUES
(30, 'Viraj Gupta', 'testimonials-1965946096.jpg', 'Project Coordinator', 'When in search of a dependable, reputable, and well-informed real estate agent in Delhi NCR, I wholeheartedly endorse Property Finder. Their level of expertise, professionalism, and individualized approach distinguishes them from their industry peers. I am confident that, just as they did for me, they will exceed your expectations in assisting you in discovering your dream property.', 1, '2023-09-15 10:55:52.025237'),
(37, 'Abhimanyu Saxena', 'testimonials-1294771054.jpg', 'Marketing Head1', 'The Property Finder team exhibited an impressive understanding of the real estate market in Delhi NCR. They invested the effort to grasp my individual requirements and preferences before presenting a selection of properties that aligned flawlessly with my criteria. Their meticulousness and comprehension of my needs streamlined the entire process, making it trouble-free and effortless.', 1, '2023-09-15 10:51:57.172652'),
(38, 'Saurav Singh', 'testimonials-1480009285.jpg', 'testing', 'I recently had the privilege of collaborating with Property Finder as my real estate agent, and I must express that my encounter with them surpassed all of my anticipations. Right from the outset, they exhibited professionalism, expert knowledge, and a sincere commitment to assisting me in discovering my ideal property.', 1, '2023-09-15 10:50:23.125658');

-- --------------------------------------------------------

--
-- Table structure for table `workculturegallery`
--

CREATE TABLE `workculturegallery` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  `cat_vdo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workculturegallery`
--

INSERT INTO `workculturegallery` (`id`, `cat_title`, `date`, `cat_img`, `cat_vdo`) VALUES
(1, 'ATS Creatives', '2023-09-14', 'work-culture-1392199674.png', 'work-culture-1496249416.png'),
(3, 'timeWork', '2023-08-10', 'work-culture-1608090747.jpg,work-culture-197895786.jpg', 'work-culture-559906399.mp4'),
(11, 'test25', '2023-08-30', 'work-culture-957223748.png,work-culture-430060168.jpg,work-culture-769890649.jpg,work-culture-1686373177.jpg', 'work-culture-1853089661.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `workwithus`
--

CREATE TABLE `workwithus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workwithus`
--

INSERT INTO `workwithus` (`id`, `title`, `location`, `skills`, `experience`, `description`, `dateCreated`) VALUES
(1, 'Associate Manager', 'noida', 'Bachelors degree in Human Resources', '3-4 years', 'Proficient in using HR software, applicant tracking systems, and other recruitment tools', '2023-09-23 11:35:09'),
(2, 'Dot Net Developer', 'Greater Noida', 'Participate in requirements analysis,Collaborate with internal teams to produce software design and architecture,Write clean, scalable code using .NET programming languages,Test and deploy applications and systems', '4 - 9 years', 'Proficient in using HR software, applicant tracking systems, and other recruitment tools', '2023-09-23 11:34:44'),
(3, 'Project Manager', 'noida', 'photoshop,illustrator', '4 years', 'Proficient in using HR software, applicant tracking systems, and other recruitment tools', '2023-09-23 11:34:47'),
(4, 'Graphics Designer', 'Noida', 'HTML,CSS,Javascript,Jquery', 'Min 2 years', 'We have an urgent opening of graphics designer having atleast 2years of experience', '2023-08-16 16:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities_logo`
--
ALTER TABLE `amenities_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_descriptions`
--
ALTER TABLE `job_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_listing`
--
ALTER TABLE `job_listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locality`
--
ALTER TABLE `locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_details`
--
ALTER TABLE `meta_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_sections`
--
ALTER TABLE `micro_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site`
--
ALTER TABLE `micro_site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_amenities`
--
ALTER TABLE `micro_site_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_banner`
--
ALTER TABLE `micro_site_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_builder`
--
ALTER TABLE `micro_site_builder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_floorplan`
--
ALTER TABLE `micro_site_floorplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_gallery`
--
ALTER TABLE `micro_site_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_highlights`
--
ALTER TABLE `micro_site_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_key_highlights`
--
ALTER TABLE `micro_site_key_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_location`
--
ALTER TABLE `micro_site_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_location_list`
--
ALTER TABLE `micro_site_location_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_overview`
--
ALTER TABLE `micro_site_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_price_insight`
--
ALTER TABLE `micro_site_price_insight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_price_list`
--
ALTER TABLE `micro_site_price_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_query`
--
ALTER TABLE `micro_site_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_site_transaction`
--
ALTER TABLE `micro_site_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micro_specifications`
--
ALTER TABLE `micro_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nri_service`
--
ALTER TABLE `nri_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_icons`
--
ALTER TABLE `other_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_type_section_item`
--
ALTER TABLE `other_type_section_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platter_page`
--
ALTER TABLE `platter_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platter_site_banner`
--
ALTER TABLE `platter_site_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platter_site_stripe`
--
ALTER TABLE `platter_site_stripe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectstatus`
--
ALTER TABLE `projectstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_emp`
--
ALTER TABLE `testimonials_emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workculturegallery`
--
ALTER TABLE `workculturegallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workwithus`
--
ALTER TABLE `workwithus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities_logo`
--
ALTER TABLE `amenities_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_descriptions`
--
ALTER TABLE `job_descriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_listing`
--
ALTER TABLE `job_listing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `locality`
--
ALTER TABLE `locality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meta_details`
--
ALTER TABLE `meta_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `micro_sections`
--
ALTER TABLE `micro_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `micro_site`
--
ALTER TABLE `micro_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `micro_site_amenities`
--
ALTER TABLE `micro_site_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `micro_site_banner`
--
ALTER TABLE `micro_site_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `micro_site_builder`
--
ALTER TABLE `micro_site_builder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `micro_site_floorplan`
--
ALTER TABLE `micro_site_floorplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `micro_site_gallery`
--
ALTER TABLE `micro_site_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `micro_site_highlights`
--
ALTER TABLE `micro_site_highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `micro_site_key_highlights`
--
ALTER TABLE `micro_site_key_highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `micro_site_location`
--
ALTER TABLE `micro_site_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `micro_site_location_list`
--
ALTER TABLE `micro_site_location_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `micro_site_overview`
--
ALTER TABLE `micro_site_overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `micro_site_price_insight`
--
ALTER TABLE `micro_site_price_insight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `micro_site_price_list`
--
ALTER TABLE `micro_site_price_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `micro_site_query`
--
ALTER TABLE `micro_site_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `micro_site_transaction`
--
ALTER TABLE `micro_site_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `micro_specifications`
--
ALTER TABLE `micro_specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nri_service`
--
ALTER TABLE `nri_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_icons`
--
ALTER TABLE `other_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `other_type_section_item`
--
ALTER TABLE `other_type_section_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `platter_page`
--
ALTER TABLE `platter_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `platter_site_banner`
--
ALTER TABLE `platter_site_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `platter_site_stripe`
--
ALTER TABLE `platter_site_stripe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectstatus`
--
ALTER TABLE `projectstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `testimonials_emp`
--
ALTER TABLE `testimonials_emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `workculturegallery`
--
ALTER TABLE `workculturegallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workwithus`
--
ALTER TABLE `workwithus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
