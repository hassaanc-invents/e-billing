-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wapda-billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE `admin_information` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `phone_number` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` text NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `admin_information` (`admin_id`, `admin_name`, `phone_number`, `admin_email`, `admin_password`, `isActive`) VALUES
(21, 'Hassaan Malikg', '1234', 'hassaan@dev.com', '202cb962ac59075b964b07152d234b70', 1),
(22, 'Hassaan Malik', '12345', 'superadmin@dev.com', '202cb962ac59075b964b07152d234b70', 2),
(23, 'wegvstrh', '1234', 'hassaanmalick2001@gmail.com', 'f1290186a5d0b1ceab27f4e77c0c5d68', 0),
(24, 'ammar', '1234', 'harehsght@dev.com', '21232f297a57a5a743894a0e4a801fc3', 0),
(25, 'afwyersg', '1234', 'hassaanmalick2001@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(26, 'Salman Test IP', '1234', 'hassaan@dev.com', '202cb962ac59075b964b07152d234b70', 0),
(27, 'Basit Hafeez', '12345678', 'basit@dev.com', '202cb962ac59075b964b07152d234b70', 0),
(28, 'Dawood Ahmad', '1234', 'dawood@dev.com', '202cb962ac59075b964b07152d234b70', 1),
(29, 'Ayaz Shareef', '34567890', 'ayaz@dev.com', '202cb962ac59075b964b07152d234b70', 1),
(30, 'Awais Ch', '123456', 'awais@dev.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `basic_pages_markup_structure`
--

CREATE TABLE `basic_pages_markup_structure` (
  `id` int(11) NOT NULL,
  `meta_data_before_head_tags` text NOT NULL,
  `bootstrap_inclusion_head_tags` text NOT NULL,
  `meta_data_after_head_tags` text NOT NULL,
  `page_closure_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_pages_markup_structure`
--

INSERT INTO `basic_pages_markup_structure` (`id`, `meta_data_before_head_tags`, `bootstrap_inclusion_head_tags`, `meta_data_after_head_tags`, `page_closure_data`) VALUES
(1, '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>', '    <?php\n    include \"./components/bootstrap/bootstrap-head.php\";\n    include \"./components/other-meta-links/meta-links.php\";\n    ?>', '</head>\n<body>\n    <!-- Navigation -->\n    <?php\n    include \"./components/navigation/navigation.php\";\n    ?>', '<!-- Footer Include -->\r\n<?php\r\ninclude \"./components/footer/footer.php\";\r\n?>\r\n<!-- Bootstrap JavaScript Link -->\r\n<?php\r\ninclude \"./components/bootstrap/bootstrap-javascript-foot.php\";\r\n?>\r\n</body>\r\n\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `main_pages_markup_data`
--

CREATE TABLE `main_pages_markup_data` (
  `page_id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `import_pages_local_links` text NOT NULL,
  `import_pages_main_button` text NOT NULL,
  `page_main_markup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_pages_markup_data`
--

INSERT INTO `main_pages_markup_data` (`page_id`, `page_name`, `import_pages_local_links`, `import_pages_main_button`, `page_main_markup`) VALUES
(1, 'index.php', '    <!-- Local Link -->\r\n    <link rel=\"stylesheet\" href=\"./style/navigation.css\">\r\n    <link rel=\"stylesheet\" href=\"./style/main-section.css\">\r\n    <link rel=\"stylesheet\" href=\"./style/whatsapp-button.css\">\r\n    <link rel=\"stylesheet\" href=\"./style/main-page-cards.css\">\r\n', '    <!--- Whatsapp Button -->\n    <?php\n    include \"./components/whatsapp-button/whatsapp-button.php\";\n    ?>', '<!-- Main Section -->\n    <?php\n    include \"./components/main-home-section/main-home-section.php\";\n    ?>\n    <!-- Website About -->\n    <div class=\"bg-dark-full\">\n        <div class=\"container p-4\">\n            <div class=\"row \">\n                <div class=\"col-sm-10 offset-sm-1 col-md-8 offset-md-2\">\n                    <form method=\"post\" action=\"result\">\n                        <div class=\"card mainform\">\n                            <div class=\"card-body\">\n                                <div class=\"input-group input-group-lg\">\n                                    <span class=\"input-group-text\" id=\"inputGroup-sizing-lg\">Reference #</span>\n                                    <input type=\"text\" name=\"reference\" id=\"reference\" class=\"form-control\" aria-label=\"Sizing example input\" aria-describedby=\"inputGroup-sizing-lg\">\n                                </div>\n                                <div class=\"input-group input-group-lg mt-4\">\n                                    <select name=\"\" id=\"\" cl class=\"form-control\">\n                                        <option value=\"\">Select Company</option>\n                                        <option value=\"\">Mepco</option>\n                                    </select>\n                                </div>\n                                <div class=\"col-sm-4 offset-sm-8\">\n                                    <button type=\"submit\" class=\"btn btn-success btn-block mt-4\" id=\"checkBill\">Check\n                                        Bill</button>\n                                </div>\n                            </div>\n                        </div>\n                    </form>\n                </div>\n            </div>\n        </div>\n    </div>\n    <!-- Cards Section -->\n    <?php\n    include \"./components/main-page-cards/main-page-cards.php\";\n    ?>\n    <!-- Home Page Blog -->\n    <?php\n    include \"./pages/home/home-page-frontend.php\";\n    ?>'),
(2, 'mepco.php', '    <!-- Local Link -->\r\n    <link rel=\"stylesheet\" href=\"./style/navigation.css\">\r\n    <link rel=\"stylesheet\" href=\"./style/whatsapp-button.css\">', '    <!--- Whatsapp Button -->\r\n    <?php\r\n    include \"./components/whatsapp-button/whatsapp-button.php\";\r\n    ?>', '    <?php\r\n    include \"./pages/mepco/mepco-frontend-uneditable.php\";\r\n    ?>\r\n    <!-- Mepco Frontend -->\r\n    <div class=\"container\">\r\n    <?php\r\n    include \"./pages/mepco/mepco-frontend.php\";\r\n    ?>\r\n    </div>'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_pages_meta_data`
--

CREATE TABLE `main_pages_meta_data` (
  `page_id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `page_markup` text NOT NULL,
  `page_title_data` text NOT NULL,
  `page_description` text NOT NULL,
  `page_keywords` text NOT NULL,
  `page_author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_pages_meta_data`
--

INSERT INTO `main_pages_meta_data` (`page_id`, `page_name`, `page_markup`, `page_title_data`, `page_description`, `page_keywords`, `page_author`) VALUES
(1, 'index.php', 'sdrbve', 'E-Billing Home By Hassaan', 'This Page has been Developed by Hassaan Malik', 'hassaan, hassaan malik, hassaan khokhar', 'Hassaan Khokhar');

-- --------------------------------------------------------

--
-- Table structure for table `sub_pages_frontend`
--

CREATE TABLE `sub_pages_frontend` (
  `sub_page_id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `file_path_to_edit` text NOT NULL,
  `sub_page_markup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_pages_frontend`
--

INSERT INTO `sub_pages_frontend` (`sub_page_id`, `page_name`, `file_path_to_edit`, `sub_page_markup`) VALUES
(1, 'mepco-frontend.php', '../../pages/mepco/', '\n\n        <p>\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, quis. Ratione repudiandae maxime\n                animi, numquam iusto labore blanditiis laudantium unde. Molestias, iusto aliquid amet sequi eaque\n                excepturi harum ex rem incidunt dolorum asperiores alias a iure temporibus consequatur quasi obcaecati\n                exercitationem, dolor, et atque non est aperiam blanditiis labore! Voluptatem cumque, voluptate, quo\n                eos, accusamus nihil iure enim adipisci numquam sapiente optio! Maxime, perspiciatis nesciunt enim saepe\n                hic ab quae. Itaque nostrum corrupti veritatis ipsam eveniet velit! Ut nobis dolores repellat? Id\n                similique ducimus dolore delectus, eaque consequatur minus aspernatur quae aliquid rerum repudiandae\n                itaque consequuntur voluptates nobis totam iure!\n            </p>\n            <p>\n                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae omnis laborum corporis provident culpa\n                aperiam illum mollitia placeat eveniet similique perferendis, amet officia voluptate voluptatum pariatur\n                est itaque vero quasi repellendus temporibus dolorum porro ab! Dicta, consectetur? Cum veniam architecto\n                voluptatum dolor obcaecati saepe eveniet ea esse ipsam laborum a impedit debitis harum, ab, vel possimus\n                odio. Sunt dolore ullam in, sapiente doloremque quidem quis similique inventore voluptates laudantium\n                quasi iusto veniam culpa omnis unde illo molestiae praesentium pariatur, vel magni maxime, perferendis\n                excepturi. Vitae, cupiditate iure! Laborum dolore saepe, laboriosam nostrum fuga distinctio veritatis!\n                Soluta alias tenetur nam praesentium quis officiis, iusto delectus, explicabo, nulla molestias quo\n                beatae. Vel modi atque explicabo accusantium, animi distinctio, consectetur sunt laudantium quia omnis\n                inventore ea voluptatem impedit, pariatur ab a obcaecati expedita iusto debitis dignissimos nostrum\n                numquam itaque cumque ad? Aut modi voluptate ducimus veritatis aspernatur, pariatur officia cumque\n                veniam est alias.\n            </p>\n            <p>\n                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero iste ab minus. Veritatis fugit\n                illo labore eaque, eius sapiente, amet laboriosam aliquid eos ex nihil obcaecati! Delectus magni ipsa\n                vitae accusantium nemo, assumenda quidem magnam, quisquam atque molestias a libero aut, saepe asperiores\n                impedit nihil facilis. Quo, velit totam!\n            </p>\n\n\n   ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_information`
--
ALTER TABLE `admin_information`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `basic_pages_markup_structure`
--
ALTER TABLE `basic_pages_markup_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_pages_markup_data`
--
ALTER TABLE `main_pages_markup_data`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `main_pages_meta_data`
--
ALTER TABLE `main_pages_meta_data`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `sub_pages_frontend`
--
ALTER TABLE `sub_pages_frontend`
  ADD PRIMARY KEY (`sub_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_information`
--
ALTER TABLE `admin_information`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `basic_pages_markup_structure`
--
ALTER TABLE `basic_pages_markup_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_pages_markup_data`
--
ALTER TABLE `main_pages_markup_data`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main_pages_meta_data`
--
ALTER TABLE `main_pages_meta_data`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_pages_frontend`
--
ALTER TABLE `sub_pages_frontend`
  MODIFY `sub_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
