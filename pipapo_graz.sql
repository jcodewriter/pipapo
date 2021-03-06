-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: pipapo-graz.at.mysql.service.one.com:3306
-- Generation Time: Oct 18, 2019 at 06:43 AM
-- Server version: 10.3.17-MariaDB-1:10.3.17+maria~bionic
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pipapo_graz_at`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`, `modified`) VALUES
(2, 'admin', '$2y$10$7IZ37cBaOa8cTaoimx/Vu.fwa5.eWjSo865OTq.tz8.lfV8YlR6QK', 'Admin', 'info@pipapo.at', '2019-07-31 15:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `file_name`, `image`, `icon_name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Suppenkuche', '1.jpg', 'categories/download/1', '1_icon.png', 'categories/icon/download/1', '2019-09-27 03:53:45', '2019-10-18 01:16:12'),
(2, 'Antipasti', '2.jpg', 'categories/download/2', '2_icon.png', 'categories/icon/download/2', '2019-09-27 03:54:32', '2019-10-18 01:16:22'),
(3, 'Gemusegarten', '3.png', 'categories/download/3', '3_icon.png', 'categories/icon/download/3', '2019-09-27 03:55:28', '2019-10-18 01:16:32'),
(4, 'Pizzabackerei', '4.png', 'categories/download/4', '4_icon.png', 'categories/icon/download/4', '2019-09-27 03:55:36', '2019-10-18 01:16:43'),
(5, 'Vom grill', '5.png', 'categories/download/5', '5_icon.png', 'categories/icon/download/5', '2019-09-27 03:55:44', '2019-10-18 01:16:57'),
(6, 'Pasta', '6.png', 'categories/download/6', '6_icon.png', 'categories/icon/download/6', '2019-09-27 03:55:56', '2019-10-18 01:17:14'),
(7, 'Alkoholfreies', NULL, NULL, '7_icon.png', 'categories/icon/download/7', '2019-09-27 03:56:03', '2019-10-18 01:17:29'),
(8, 'Dolce', NULL, NULL, '8_icon.png', 'categories/icon/download/8', '2019-09-27 03:56:36', '2019-10-18 01:17:43'),
(9, 'Caffe tee', NULL, NULL, '9_icon.png', 'categories/icon/download/9', '2019-09-27 03:56:55', '2019-10-18 01:18:15'),
(10, 'Alkoholisches', NULL, NULL, '10_icon.png', 'categories/icon/download/10', '2019-09-27 03:57:10', '2019-10-18 01:18:29'),
(11, 'Vino', '11.png', 'categories/download/11', '11_icon.png', 'categories/icon/download/11', '2019-09-27 03:57:30', '2019-10-18 01:18:45'),
(12, 'Test Category', '12.png', 'categories/download/12', '12_icon.png', 'categories/icon/download/12', '2019-10-15 09:14:35', '2019-10-18 01:19:11'),
(13, 'Category Category', NULL, NULL, NULL, NULL, '2019-10-15 09:43:30', '2019-10-15 09:43:30'),
(14, 'CateCateCate', '14.png', 'categories/download/14', NULL, NULL, '2019-10-15 09:45:53', '2019-10-15 09:45:53'),
(15, 'TTTT', NULL, NULL, NULL, NULL, '2019-10-15 18:48:47', '2019-10-15 18:48:47'),
(16, 'CCC', NULL, NULL, NULL, NULL, '2019-10-16 10:21:10', '2019-10-16 10:21:10'),
(17, 'AAA', '17.png', 'categories/download/17', NULL, NULL, '2019-10-16 10:22:03', '2019-10-16 10:22:05'),
(18, 'BBBB', '18.png', 'categories/download/18', NULL, NULL, '2019-10-16 10:23:28', '2019-10-16 10:23:30'),
(19, 'ABCD', '19.png', 'categories/download/19', '19_icon.png', 'categories/icon/download/19', '2019-10-18 01:19:42', '2019-10-18 01:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_methods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `close` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `directions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handicapped_accessible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tables` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoking_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `website`, `payment_methods`, `open`, `close`, `directions`, `handicapped_accessible`, `tables`, `parking`, `smoking_area`, `created_at`, `updated_at`) VALUES
(2, 'Contact Address', '18524441700', 'admin@pipapo.com', 'popapo.com', 'Paypal', '{\"hour\":0,\"minute\":1}', '{\"hour\":0,\"minute\":2}', NULL, NULL, NULL, NULL, NULL, '2019-10-03 01:48:31', '2019-10-18 06:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`, `modified`) VALUES
(1, 'teilnahmebedingungen', '<p><br></p>', '2019-10-11 10:01:47'),
(2, 'datenschutz', '			\r\n			\r\n		<div id=\"fws_5d3ef578ab385\" data-midnight=\"dark\" data-bg-mobile-hidden=\"\" class=\"wpb_row row-fluid row standard_section   \" style=\"padding-top: 0px; padding-bottom: 0px; \"><div class=\"row-bg-wrap instance-0\"> <div class=\"row-bg    \" style=\"\" data-color_overlay=\"\" data-color_overlay_2=\"\" data-gradient_direction=\"\" data-overlay_strength=\"0.3\" data-enable_gradient=\"false\"></div> </div><div class=\"col span_12 dark left\">\r\n	<div class=\"col-sm-12 wpb_column column_container column_container col no-extra-padding instance-0\" data-bg-cover=\"\" data-padding-pos=\"all\" data-has-bg-color=\"false\" data-bg-color=\"\" data-bg-opacity=\"1\" data-hover-bg=\"\" data-hover-bg-opacity=\"1\" data-animation=\"\" data-delay=\"0\">\r\n		<div class=\"column-inner\">\r\n			<div class=\"wpb_wrapper\">\r\n				\r\n	<div class=\"wpb_text_column wpb_content_element \">\r\n		<div class=\"wpb_wrapper\">\r\n			<h4>Datenschutzerkl??rung</h4>\r\n<p>Die Website www.pipapo.at wird Ihnen von Gerster GmbH zur Verf??gung gestellt. Sie k??nnen unsere Webseiten grunds??tzlich besuchen, ohne uns mitzuteilen, wer Sie sind. Wir speichern in diesem Fall lediglich Zugriffsdaten ohne Personenbezug, wie den Namen Ihres Internetservice-Providers, die Website, von der aus Sie uns besuchen und den Namen der angeforderten Datei. Diese Informationen werden h??chstens zu statistischen Zwecken ausgewertet und dienen der Verbesserung unserer Angebote. Sie bleiben als einzelner Nutzer hierbei anonym.</p>\r\n<h4>Erhebung und Verwendung personenbezogener Daten</h4>\r\n<p>Der Schutz Ihrer personenbezogenen Daten ist uns wichtig. Ihre personenbezogenen Daten werden von uns ausschlie??lich im Rahmen der einschl??gigen Datenschutzbestimmungen erhoben und verwendet. Im Folgenden informieren wir Sie ??ber Art und Umfang der von Ihnen erhobenen personenbezogenen Daten sowie die Zwecke, zu denen diese Daten erhoben und genutzt werden. Personenbezogene Daten sind Informationen zu Ihrer Identit??t, wie z.B. Name, Adresse, E-Mail-Adresse, Telefonnummer, IP-Daten.</p>\r\n<p>Personenbezogene Daten werden nur erhoben, wenn Sie uns diese von sich aus zur Beantwortung einer Anfrage oder zur Durchf??hrung einer Reservierung/Bestellung mitteilen. Wir verwenden die von Ihnen mitgeteilten personenbezogenen Daten ausschlie??lich zu dem Zweck, zu dem Sie uns die Daten mitgeteilt haben. Werden Ihre Daten nicht mehr ben??tigt, werden diese gel??scht.</p>\r\n<p>Wir geben Ihre Daten einschlie??lich Ihrer Adresse und E-Mail-Adresse nicht an Dritte weiter.</p>\r\n<h4>Cookies</h4>\r\n<p>Um den Besuch unserer Website attraktiv zu gestalten und Ihnen die Nutzung bestimmter Funktionen zu erm??glichen, verwenden wir sog. Cookies. ???Cookies??? sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden. Sitzungs-Cookies werden beim Schlie??en des Browsers automatisch gel??scht. Werden dauerhafte Cookies gesetzt, so erm??glichen diese, dass Ihr Rechner beim n??chsten Besuch der Website wiedererkannt wird und unterst??tzen z. B. die Eingabe Ihres Benutzernamens. Selbstverst??ndlich k??nnen Sie Cookies jederzeit ablehnen, sofern Ihr Browser dies zul??sst.</p>\r\n<h4>Einsatz von Tracking-Technologien</h4>\r\n<p>Ferner werden auf unserer Website mittels Tracking-Technologien Informationen dar??ber, wie Sie unsere Website nutzen, zu Marketing- und Optimierungszwecken erhoben und gespeichert. Beim Zugriff auf unsere Website ??bermittelt Ihr Browser automatisch folgende Daten an unseren Webserver: Datum und Uhrzeit des Zugriffs, URL der zuvor aufgerufenen Website (sog. Referrer-URL), aufgerufene Datei, Menge der gesendeten Daten, Typ und Version des von Ihnen benutzten Browsers, Ihr Betriebssystem sowie Ihre IP-Adresse. Aus diesen Daten k??nnen unter Verwendung eines Pseudonyms Nutzungsprofile erstellt werden. Hierzu k??nnen Cookies eingesetzt werden, die lokal im Zwischenspeicher Ihres Internet-Browsers gespeichert werden. Die Cookies erm??glichen die Wiedererkennung des Internet-Browsers. Diese Daten werden getrennt von anderen Daten, die Sie im Rahmen der Nutzung unseres Angebotes eingeben, gespeichert und nicht dazu benutzt, den Besucher dieser Website pers??nlich zu identifizieren. Eine Zuordnung dieser Daten zu einer konkreten Person erfolgt nicht. Im Anschluss an statistische Auswertungen werden diese Daten gel??scht. Der Datenerhebung und -speicherung kann jederzeit mit Wirkung f??r die Zukunft widersprochen werden.</p>\r\n<h4>Sicherheit</h4>\r\n<p>Unsere Website und die sonstigen Systeme sichern wir durch technische und organisatorische Ma??nahmen gegen Zerst??rung, Verlust, Zugriff, Ver??nderung oder Verbreitung Ihrer Daten durch unbefugte Personen. Ein vollst??ndiger Schutz gegen alle Gefahren ist jedoch trotz regelm????iger Kontrollen nicht m??glich. Wir weisen darauf hin, dass die Daten??bertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitsl??cken aufweisen kann. Ein l??ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht m??glich.</p>\r\n<h4>Einsatz von Google Analytics</h4>\r\n<p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (???Google???). Google Analytics verwendet sog. ???Cookies???, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie erm??glichen. Die durch den Cookie erzeugten Informationen ??ber Ihre Benutzung dieser Website (einschlie??lich Ihrer IP-Adresse) werden an einen Server von Google in den USA ??bertragen und dort gespeichert.</p>\r\n<p>Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports ??ber die Websiteaktivit??ten f??r die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte ??bertragen, sofern dies gesetzlich vorgeschrieben ist oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten in Verbindung bringen.</p>\r\n<p>Sie k??nnen die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht s??mtliche Funktionen dieser Website voll umf??nglich nutzen k??nnen. Durch die Nutzung dieser Website erkl??ren Sie sich mit der Bearbeitung der ??ber Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden. Der Datenerhebung und -speicherung kann jederzeit mit Wirkung f??r die Zukunft widersprochen werden. Unsere Kontaktadresse f??r den Widerspruch finden Sie unten oder in unserem Impressum. Alternativ k??nnen Sie das Deaktivierungs-Add-on von Google Analytics (http://tools.google.com/dlpage/gaoptout?hl=de) verwenden, sofern es f??r Ihren Browser verf??gbar ist.</p>\r\n<p>Es wird darauf hingewiesen, dass diese Website Google Analytics mit der Erweiterung ???_anonymizeIp()??? verwendet und daher IP-Adressen nur gek??rzt weiterverarbeitet werden, um eine direkte Personenbeziehbarkeit auszuschlie??en.</p>\r\n<h4>Einsatz von Google Maps</h4>\r\n<p>Auf dieser Webseite nutzen wir das Angebot von Google Maps. Dadurch k??nnen wir Ihnen interaktive Karten direkt in der Website anzeigen und erm??glichen Ihnen die komfortable Nutzung der Karten-Funktion.</p>\r\n<p>Durch den Besuch auf der Website erh??lt Google die Information, dass Sie die entsprechende Unterseite unserer Website aufgerufen haben. Dies erfolgt unabh??ngig davon, ob Google ein Nutzerkonto bereitstellt, ??ber das Sie eingeloggt sind, oder ob kein Nutzerkonto besteht. Wenn Sie bei Google eingeloggt sind, werden Ihre Daten direkt Ihrem Konto zugeordnet. Wenn Sie die Zuordnung mit Ihrem Profil bei Google nicht w??nschen, m??ssen Sie sich vor Aktivierung des Buttons ausloggen. Google speichert Ihre Daten als Nutzungsprofile und nutzt sie f??r Zwecke der Werbung, Marktforschung und/oder bedarfsgerechten Gestaltung seiner Website. Eine solche Auswertung erfolgt insbesondere (selbst f??r nicht eingeloggte Nutzer) zur Erbringung von bedarfsgerechter Werbung und um andere Nutzer des sozialen Netzwerks ??ber Ihre Aktivit??ten auf unserer Website zu informieren. Ihnen steht ein Widerspruchsrecht zu gegen die Bildung dieser Nutzerprofile, wobei Sie sich zur Aus??bung dessen an Google richten m??ssen.</p>\r\n<p>Weitere Informationen zu Zweck und Umfang der Datenerhebung und ihrer Verarbeitung durch den Plug-in-Anbieter erhalten Sie in den Datenschutzerkl??rungen des Anbieters. Dort erhalten Sie auch weitere Informationen zu Ihren diesbez??glichen Rechten und Einstellungsm??glichkeiten zum Schutze Ihrer Privatsph??re: Datenschutzerkl??rung von Google (https://www.google.de/intl/de/policies/privacy). Google verarbeitet Ihre personenbezogenen Daten auch in den USA und hat sich dem EU-US Privacy Shield (https://www.privacyshield.gov/EU-US-Framework) unterworfen.</p>\r\n<h4>Weitere Informationen</h4>\r\n<p>Sie k??nnen jederzeit unentgeltlich Auskunft ??ber Ihre gespeicherten Daten verlangen und haben ggf. ein Recht auf Berichtigung, Sperrung oder L??schung dieser Daten. Wenn Sie Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer personenbezogenen Daten haben, sowie im Falle von Ausk??nften, Berichtigung, Sperrung oder L??schung von personenbezogenen Daten sowie f??r Widerrufe erteilter Einwilligungen wenden Sie sich bitte an:</p>\r\n<p>Gerster GmbH</p><p>Roseggerring 30, 8054 Seiersberg-Pirka</p><p>??sterreich<br></p>\r\n<p>T: +43 (0)664 ??? 543 62 92<br>\r\nE: office@pipapo-graz.at</p>\r\n<p>UID: ATU74120738<br>\r\nFN: 505826m<br>\r\nGericht: Landesgericht Graz</p>\r\n\r\n		</div>\r\n	</div>\r\n\r\n			</div> \r\n		</div>\r\n	</div> \r\n</div></div>\r\n', '2019-10-11 14:21:34'),
(3, 'impressum', '<div class=\"column-inner\">\r\n                                <div class=\"wpb_wrapper\">\r\n\r\n                                    <div class=\"wpb_text_column wpb_content_element \">\r\n                                        <div class=\"wpb_wrapper\">\r\n                                            <h1 style=\"font-size: 45px; line-height: 50px;\">Offenlegung nach ?? 25 Mediengesetz ?? Copyright ?? Haftung</h1>\r\n\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"divider-wrap\">\r\n                                        <div style=\"height: 30px;\" class=\"divider\"></div>\r\n                                    </div>\r\n                                    <div class=\"wpb_text_column wpb_content_element \">\r\n                                        <div class=\"wpb_wrapper\">\r\n                                            <p>Der Inhalt, einschlie??lich Bilder, und die Gestaltung der Webseite unterliegen dem Schutz des Urheberrechts und anderer Gesetze zum Schutz geistigen Eigentums, unabh??ngig von jeglicher Kennzeichnung (z.B. ??, ??, oder TM Vermerk).</p>\r\n                                            <p>Im Hinblick auf die technischen Eigenschaften des Internet kann keine Gew??hr f??r die Authentizit??t, Richtigkeit und Vollst??ndigkeit der im Internet zur Verf??gung gestellten Informationen ??bernommen werden. Es wird auch keine Gew??hr f??r die Verf??gbarkeit oder den Betrieb der gegenst??ndlichen Homepage und ihrer Inhalte ??bernommen.</p>\r\n                                            <p>Jede Haftung f??r unmittelbare, mittelbare oder sonstige Sch??den, unabh??ngig von deren Ursachen, die aus der Benutzung oder Nichtverf??gbarkeit der Daten und Informationen dieser Homepage erwachsen, wird, soweit rechtlich zul??ssig, ausgeschlossen.</p>\r\n                                            <p>Der Inhalt dieser Homepage ist urheberrechtlich gesch??tzt. Die Informationen sind nur f??r die pers??nliche Verwendung bestimmt. Jede weitergehende Nutzung insbesondere die Speicherung in Datenbanken, Vervielf??ltigung und jede Form von gewerblicher Nutzung sowie die Weitergabe an Dritte ??? auch in Teilen oder in ??berarbeiteter Form ??? ohne Zustimmung der jeweiligen Organisation ist untersagt.</p>\r\n\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                </div>\r\n                            </div>', '2019-10-11 14:19:56'),
(4, 'Foto-Rechte', '<div class=\"column-inner\">\r\n                                <div class=\"wpb_wrapper\">\r\n\r\n                                    <div class=\"wpb_text_column wpb_content_element \">\r\n                                        <div class=\"wpb_wrapper\">\r\n                                            <h1 style=\"box-sizing: border-box; outline: 0px !important; margin: 10px 0px; font-family: inherit; font-weight: 600; line-height: 50px; color: inherit; font-size: 3em;\">Foto-Rechte / Copyrights / Hinweise</h1><h1 style=\"font-size: 3em; line-height: 50px;\"><div class=\"wpb_text_column wpb_content_element \" style=\"font-size: 14px; font-weight: 400;\"><div class=\"wpb_wrapper\"></div></div><div class=\"divider-wrap\" style=\"font-size: 14px; font-weight: 400;\"><div class=\"divider\" style=\"height: 30px;\"></div></div><div id=\"fws_5d3ef641e71c7\" data-midnight=\"\" data-bg-mobile-hidden=\"\" class=\"wpb_row row-fluid row  row-o-equal-height row-flex  row-o-content-middle standard_section   \" style=\"font-size: 14px; font-weight: 400; padding-top: 0px; padding-bottom: 0px;\"><div class=\"row-bg-wrap\"><div class=\"row-bg   \"></div></div><div class=\"col span_12  left\" style=\"width: 853.5px;\"><div class=\"col-sm-3 wpb_column column_container column_container col no-extra-padding instance-3\" data-bg-cover=\"\" data-padding-pos=\"all\" data-has-bg-color=\"false\" data-bg-color=\"\" data-bg-opacity=\"1\" data-hover-bg=\"\" data-hover-bg-opacity=\"1\" data-animation=\"\" data-delay=\"0\" style=\"width: 208.375px;\"><div class=\"column-inner\"><div class=\"wpb_wrapper\"><div class=\"img-with-aniamtion-wrap \" data-max-width=\"100%\"><div class=\"inner\"><img data-shadow=\"none\" data-shadow-direction=\"middle\" class=\"img-with-animation  animated-in\" data-delay=\"0\" height=\"400\" width=\"600\" data-animation=\"none\" src=\"https://pipapo.at/wp-content/uploads/2017/01/start.jpg\" alt=\"\"></div></div></div></div></div><div class=\"col-sm-9 wpb_column column_container column_container col no-extra-padding instance-4\" data-bg-cover=\"\" data-padding-pos=\"all\" data-has-bg-color=\"false\" data-bg-color=\"\" data-bg-opacity=\"1\" data-hover-bg=\"\" data-hover-bg-opacity=\"1\" data-animation=\"\" data-delay=\"0\" style=\"width: 625.125px;\"><div class=\"column-inner\"><div class=\"wpb_wrapper\"><div class=\"wpb_text_column wpb_content_element \"><div class=\"wpb_wrapper\"><p><span style=\"font-weight: bolder;\">Pasta ingredients on black slate background<br></span>Urheber: Cristian Teichner&nbsp;<br>Datei: #60566232</p><p><a href=\"https://de.fotolia.com/id/60566232\" target=\"_blank\" rel=\"noopener noreferrer\">Link zur Originaldatei (Fotolia.de)!</a></p></div></div></div></div></div></div></div><div id=\"fws_5d3ef641e7d39\" data-midnight=\"\" data-bg-mobile-hidden=\"\" class=\"wpb_row row-fluid row  row-o-equal-height row-flex  row-o-content-middle standard_section   \" style=\"font-size: 14px; font-weight: 400; padding-top: 0px; padding-bottom: 0px;\"><div class=\"row-bg-wrap\"><div class=\"row-bg   \"></div></div><div class=\"col span_12  left\" style=\"width: 853.5px;\"><div class=\"col-sm-3 wpb_column column_container column_container col no-extra-padding instance-5\" data-bg-cover=\"\" data-padding-pos=\"all\" data-has-bg-color=\"false\" data-bg-color=\"\" data-bg-opacity=\"1\" data-hover-bg=\"\" data-hover-bg-opacity=\"1\" data-animation=\"\" data-delay=\"0\" style=\"width: 208.375px;\"><div class=\"column-inner\"><div class=\"wpb_wrapper\"><div class=\"img-with-aniamtion-wrap \" data-max-width=\"100%\"><div class=\"inner\"><img data-shadow=\"none\" data-shadow-direction=\"middle\" class=\"img-with-animation  animated-in\" data-delay=\"0\" height=\"400\" width=\"800\" data-animation=\"none\" src=\"https://pipapo.at/wp-content/uploads/2017/01/video.jpg\" alt=\"\"></div></div></div></div></div><div class=\"col-sm-9 wpb_column column_container column_container col no-extra-padding instance-6\" data-bg-cover=\"\" data-padding-pos=\"all\" data-has-bg-color=\"false\" data-bg-color=\"\" data-bg-opacity=\"1\" data-hover-bg=\"\" data-hover-bg-opacity=\"1\" data-animation=\"\" data-delay=\"0\" style=\"width: 625.125px;\"><div class=\"column-inner\"><div class=\"wpb_wrapper\"><div class=\"wpb_text_column wpb_content_element \"><div class=\"wpb_wrapper\"><p><span style=\"font-weight: bolder;\">Slicing home made pizza<br></span>Urheber: leimmagini&nbsp;<br>Clipnummer: 4943765</p><p><a href=\"http://www.shutterstock.com/de/video/clip-4943765-stock-footage-slicing-home-made-pizza.html?src=id/0\" target=\"_blank\" rel=\"noopener noreferrer\">Link zur Originaldatei (Shutterstock.com)!</a></p></div></div></div></div></div></div></div></h1></div></div><div class=\"wpb_text_column wpb_content_element \"><div class=\"wpb_wrapper\">\r\n\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                </div>\r\n                            </div>', '2019-07-29 15:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `line1` varchar(255) DEFAULT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copyrights`
--

INSERT INTO `copyrights` (`id`, `image`, `title`, `line1`, `line2`, `link`, `url`, `modified`) VALUES
(1, 'thump_image_1.jpg', 'Pasta ingredients on black slate background', 'Urheber: Cristian Teichner', 'Datei: #60566232', 'Link zur Originaldatei (Fotolia.de)!', 'https://de.fotolia.com/id/60566232', '2019-07-31 10:00:46'),
(2, 'thump_image_2.jpg', 'Slicing home made pizza', 'Urheber: leimmagini ', 'Clipnummer: 4943765', 'Link zur Originaldatei (Shutterstock.com)!', 'http://www.shutterstock.com/de/video/clip-4943765-stock-footage-slicing-home-made-pizza.html?src=id/0', '2019-07-31 10:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `thumb`, `modified`) VALUES
(34, '2019-Oct-Fri', 'image_34.jpeg', 'thump_image_34.jpeg', '2019-10-04 15:35:01'),
(33, '2019-Oct-Fri', 'image_33.jpeg', 'thump_image_33.jpeg', '2019-10-04 15:35:00'),
(32, '2019-Oct-Fri', 'image_32.jpeg', 'thump_image_32.jpeg', '2019-10-04 15:34:59'),
(31, '2019-Oct-Fri', 'image_31.jpeg', 'thump_image_31.jpeg', '2019-10-04 15:34:58'),
(30, '2019-Oct-Fri', 'image_30.jpeg', 'thump_image_30.jpeg', '2019-10-04 15:34:58'),
(29, '2019-Oct-Fri', 'image_29.jpeg', 'thump_image_29.jpeg', '2019-10-04 15:34:56'),
(35, '2019-Oct-Fri', 'image_35.jpeg', 'thump_image_35.jpeg', '2019-10-04 15:35:01'),
(36, '2019-Oct-Fri', 'image_36.jpeg', 'thump_image_36.jpeg', '2019-10-04 15:35:02'),
(37, '2019-Oct-Fri', 'image_37.jpeg', 'thump_image_37.jpeg', '2019-10-04 15:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(88, '2014_10_12_000000_create_users_table', 1),
(89, '2014_10_12_100000_create_password_resets_table', 1),
(90, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(91, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(92, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(93, '2016_06_01_000004_create_oauth_clients_table', 1),
(94, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(95, '2019_09_21_030503_create_restaurants_table', 1),
(96, '2019_09_21_030517_create_gallery_table', 1),
(97, '2019_09_21_030536_create_products_table', 1),
(98, '2019_09_21_030556_create_bonus_table', 1),
(99, '2019_09_21_030625_create_orders_table', 1),
(100, '2019_09_23_050540_create_categories_table', 1),
(101, '2019_09_23_175227_create_contacts_table', 1),
(102, '2019_09_23_175321_create_rating_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('130eb0eb509f34cee07e52dc5fd16bcc55b40b23b22bd9d65a5c92b3920b607de37f8e09caca9788', 1, 1, 'Pipapo', '[]', 0, '2019-10-16 17:57:32', '2019-10-16 17:57:32', '2020-10-16 17:57:32'),
('13de85f888e0e28806edf8877a693a5afbd5847bfcc8658bf9ff9ea3cf1166a6574932778fa8dc56', 3, 1, 'Pipapo', '[]', 0, '2019-10-17 00:15:08', '2019-10-17 00:15:08', '2020-10-17 00:15:08'),
('21e80ebfa41153cf9ecb952044f0b63bb4bcd2bea73e58eab841d098e1e20b948b3544a244314bf7', 3, 1, 'Pipapo', '[]', 0, '2019-10-17 00:26:57', '2019-10-17 00:26:57', '2020-10-17 00:26:57'),
('29ae3732bb87b83deb1295ddd0ed20c4af0aa03b6ac620a28b1e0d5cedc9272acf9a1b8009c36620', 1, 1, 'Pipapo', '[]', 0, '2019-10-17 16:51:17', '2019-10-17 16:51:17', '2020-10-17 16:51:17'),
('43a8b7e66e3baef1989d6e1f36e53171141f312eae49830d650c81e1a0ed5caf286b8b8cb81d7206', 1, 1, 'Pipapo', '[]', 0, '2019-10-14 02:51:05', '2019-10-14 02:51:05', '2020-10-14 10:51:05'),
('45bd7717a2f3a141e73b7ee712c19b666b457823974e1d3136378127c14e8967f2bc517ee3cfdba9', 4, 1, 'Pipapo', '[]', 0, '2019-10-14 06:33:14', '2019-10-14 06:33:14', '2020-10-14 14:33:14'),
('4a2caf9be9e7b71617b113c0a4cd00a3d6b018eaeee560138119fe97c67f11a2422cea5d2766ef1e', 3, 1, 'Pipapo', '[]', 0, '2019-10-14 19:18:42', '2019-10-14 19:18:42', '2020-10-15 03:18:42'),
('56400306a70ab1edec48ad5d8f727bbb3b440fd3e8d6841f0853ae048216b24ebf57a46ec13ccece', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 00:21:23', '2019-10-15 00:21:23', '2020-10-15 08:21:23'),
('5e33f7c705870b4edece7e5bf3547111e5d78b94da905c16a1cfc85506ffaa0a5339437af7482873', 1, 1, 'Pipapo', '[]', 0, '2019-10-14 02:46:28', '2019-10-14 02:46:28', '2020-10-14 10:46:28'),
('6998f0a544c2fad0c644e8b59180e7be17dc5dd4ade31ecffab368a5610e27efee3fdbfdee272eb5', 2, 1, 'Pipapo', '[]', 0, '2019-10-14 06:29:20', '2019-10-14 06:29:20', '2020-10-14 14:29:20'),
('800d5151fa6c3aa5124226234f69bab0d3418d35cbbca33f61671a4e28dc2f793d06d51dfb4cc69b', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 02:01:11', '2019-10-15 02:01:11', '2020-10-15 10:01:11'),
('8e70c0af70ad865d9cad63e4da7d557bce9043d741c33122edf579669ed69e6e3113de14e1a2e486', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 00:22:52', '2019-10-15 00:22:52', '2020-10-15 08:22:52'),
('91cab99b6fc37e9b4425d95eef5236e31a149d79c6a70732a33cc098a2e15f8956842c20943e23ef', 3, 1, 'Pipapo', '[]', 0, '2019-10-16 23:57:17', '2019-10-16 23:57:17', '2020-10-16 23:57:17'),
('93293a36fe5ba14771f385d59c305d6facf165ac7841dab7999aebc53fa10539b88df4fbe77a2fa7', 3, 1, 'Pipapo', '[]', 0, '2019-10-17 00:51:53', '2019-10-17 00:51:53', '2020-10-17 00:51:53'),
('9347920d0d4833339865029d128fae50c009b9db884b75f6f7f7fdcff5a3ba06bfdd01d86c0d255e', 1, 1, 'Pipapo', '[]', 0, '2019-10-15 18:44:54', '2019-10-15 18:44:54', '2020-10-15 18:44:54'),
('955486c7bbb8969e392ce24085dd428a9d0330ccbe3e4fe507c017ab5cef8b3cb6ce567380b2a3ac', 4, 1, 'Pipapo', '[]', 0, '2019-10-15 00:30:21', '2019-10-15 00:30:21', '2020-10-15 08:30:21'),
('9ab57f2fd7f440bf6b90637271532f79ffe7b5e9cbba675a3d12bcd57f74f3a22a2c0cd953b8a3b0', 2, 1, 'Pipapo', '[]', 0, '2019-10-14 02:33:51', '2019-10-14 02:33:51', '2020-10-14 10:33:51'),
('a5284203de8336dc01ac44996e386e89a29fb4d53361219595d8afdb27ac6803dcbfeb3ddf428264', 1, 1, 'Pipapo', '[]', 0, '2019-10-17 06:18:43', '2019-10-17 06:18:43', '2020-10-17 06:18:43'),
('a87fb6961f9c3ffa3e110948c0c83e15328442803abf37790a7f42fdb8af912e9aaeedd58c65eedf', 5, 1, 'Pipapo', '[]', 0, '2019-10-17 04:53:04', '2019-10-17 04:53:04', '2020-10-17 04:53:04'),
('d064be1394fbd865bfab08f1ab16ecb242e99fcb512df2d06b4ac9b7b3068e2e5dbe13057ec44906', 3, 1, 'Pipapo', '[]', 0, '2019-10-16 23:56:18', '2019-10-16 23:56:18', '2020-10-16 23:56:18'),
('d395c990ea0a21bc43616747f07ba77698e82d6ba8f801dcfbbe4128fa469e123ac2fb0d03cb3ff8', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 00:53:34', '2019-10-15 00:53:34', '2020-10-15 08:53:34'),
('e0d4862fded01d44f708d0cbd1f67073aa7768446e27606320edd70376b137d9d4599af567f471b0', 4, 1, 'Pipapo', '[]', 0, '2019-10-14 06:40:12', '2019-10-14 06:40:12', '2020-10-14 14:40:12'),
('e44f26379cecd953dfc494c5d5877524dd1b41fadaffb2995a315221145bb1712e96c6c1889fcaf3', 3, 1, 'Pipapo', '[]', 0, '2019-10-17 00:32:00', '2019-10-17 00:32:00', '2020-10-17 00:32:00'),
('e6631da2ff0b4dccfbaf0b291a5c52e565347b2d4ce1a5c78abacfe9b503b02fcbdede6d90c1445a', 1, 1, 'Pipapo', '[]', 0, '2019-10-17 13:54:37', '2019-10-17 13:54:37', '2020-10-17 13:54:37'),
('e7bef04ea05e557a309effe95907857e4516a8a28202a174c972ccacd39b9774b377b8fb4463ac63', 1, 1, 'Pipapo', '[]', 0, '2019-10-18 06:28:02', '2019-10-18 06:28:02', '2020-10-18 06:28:02'),
('edef3ebb038adc9cc43083adf5bd28bfc22232ace096f303c81760b2c53fc0b5c845795592527e44', 3, 1, 'Pipapo', '[]', 0, '2019-10-14 19:37:45', '2019-10-14 19:37:45', '2020-10-15 03:37:45'),
('ef6d678308161483d40906a8273f5036a0c20dd7f49713eb786f8439c4fefcd3b16e9c9793eee21a', 1, 1, 'Pipapo', '[]', 0, '2019-10-16 10:26:22', '2019-10-16 10:26:22', '2020-10-16 10:26:22'),
('f1b813d35ec067f19e703a2788a2dcc6785dc032c68b3eb4b880e7cf658b52df638d7d61c8f7db76', 3, 1, 'Pipapo', '[]', 0, '2019-10-16 23:56:17', '2019-10-16 23:56:17', '2020-10-16 23:56:17'),
('f248dc36f4c862b381d5bbb3c01fdc911b9ea0b6a28101754a8ec4b0275b7830d0168f01bad545d8', 5, 1, 'Pipapo', '[]', 0, '2019-10-17 04:53:26', '2019-10-17 04:53:26', '2020-10-17 04:53:26'),
('fbeafc9c50d8262446e4f9e3c4784e6239d81df32cce957c1024db88b1f25e7e6cb3b1ff801c5a8c', 1, 1, 'Pipapo', '[]', 0, '2019-10-18 06:13:14', '2019-10-18 06:13:14', '2020-10-18 06:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'gUhdDZ2AfijMSHNXIDCXn2YY0LN6ZQ99P7OC4f41', 'http://localhost', 1, 0, 0, '2019-09-23 10:59:38', '2019-09-23 10:59:38'),
(2, NULL, 'Laravel Password Grant Client', 'Tz909uwr4RvKDa1llIJ5zkEiSdzJYTDFSPggWPPs', 'http://localhost', 0, 1, 0, '2019-09-23 10:59:38', '2019-09-23 10:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-09-23 10:59:38', '2019-09-23 10:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymethod` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `comment`, `transaction_id`, `paymethod`, `location`, `products`, `customer`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'Paypal', '{\"lat\": 11.1, \"lng\": 21.1}', '{\"id\": 2, \"name\": \"Product 2\", \"image\": \"products/download/2\", \"price\": 150, \"category\": 3, \"allergens\": null, \"file_name\": \"2.png\", \"created_at\": \"2019-09-27 12:20:28\", \"supplement\": null, \"updated_at\": \"2019-09-27 15:03:50\", \"description\": \"Product 2 description\", \"portion_sizes\": null}', '{\"id\": 1, \"email\": \"admin@pipapo.com\", \"phone\": null, \"place\": null, \"strabe\": null, \"surname\": null, \"host_code\": null, \"created_at\": \"2019-09-23 18:16:08\", \"first_name\": \"Admin\", \"updated_at\": \"2019-09-23 18:16:08\", \"house_number\": null, \"email_verified_at\": null}', NULL, '2019-09-27 07:16:13', '2019-09-27 07:16:13'),
(2, 1, 'Order comment', 'abcdasfasodfafodasofdioashfioashfidosahfio', 'Paypal', '{\"lat\": 11.1, \"lng\": 21.1}', '{\"id\": 2, \"name\": \"Product 2\", \"image\": \"products/download/2\", \"price\": 150, \"category\": 3, \"allergens\": null, \"file_name\": \"2.png\", \"created_at\": \"2019-09-27 12:20:28\", \"supplement\": null, \"updated_at\": \"2019-09-27 15:03:50\", \"description\": \"Product 2 description\", \"portion_sizes\": null}', '{\"id\": 1, \"email\": \"admin@pipapo.com\", \"phone\": null, \"place\": null, \"strabe\": null, \"surname\": null, \"host_code\": null, \"created_at\": \"2019-09-23 18:16:08\", \"first_name\": \"Admin\", \"updated_at\": \"2019-09-23 18:16:08\", \"house_number\": null, \"email_verified_at\": null}', 20.5, '2019-10-16 03:39:41', '2019-10-16 03:39:41'),
(3, 3, NULL, 'test_123434677', 'paypal', NULL, 'afdasfasdfasdfasfasdf', 'customer', 236, '2019-10-16 15:17:57', '2019-10-16 15:17:57'),
(4, 3, NULL, 'test_123434677', 'klarna', NULL, '[{\"id\":3,\"name\":\"Product 2\",\"description\":\"Product Description\",\"file_name\":\"3.png\",\"image\":\"products/download/3\",\"price\":50,\"category_id\":2,\"portion_size\":2,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-27 12:21:22\",\"updated_at\":\"2019-10-15 20:17:51\",\"category\":\"Antipasti\",\"quantity\":2},{\"id\":6,\"name\":\"Test Product\",\"description\":\"Test Product description\",\"file_name\":\"6.jpg\",\"image\":\"products/download/6\",\"price\":12,\"category_id\":2,\"portion_size\":2,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-10-15 15:55:33\",\"updated_at\":\"2019-10-15 16:05:24\",\"category\":\"Antipasti\",\"quantity\":5},{\"id\":1,\"name\":\"Product 1\",\"description\":\"Product 1 description\",\"file_name\":\"1.png\",\"image\":\"products/download/1\",\"price\":100,\"category_id\":1,\"portion_size\":null,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-24 03:10:18\",\"updated_at\":\"2019-09-24 03:10:18\",\"category\":\"Suppenkuche\",\"quantity\":3}]', '{\"id\":3,\"first_name\":\"Dragon\",\"surname\":\"Super\",\"email\":\"dragon@ordering.co\",\"email_verified_at\":null,\"gender\":\"male\",\"birthday\":\"2019-10-16T19:44:06.415Z\",\"phone\":null,\"company\":\"??????????????????????????????\",\"street\":\"????????? ?????????\",\"house_number\":\"14-2\",\"door_number\":\"6-2\",\"additive\":null,\"post_code\":\"110020\",\"place\":null,\"country\":\"China\",\"device_token\":null,\"created_at\":\"2019-10-07 06:55:26\",\"updated_at\":\"2019-10-16 19:47:43\",\"token_type\":\"Bearer\",\"access_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjE5ODllMDA5NGNjM2I2MzUwZTdjNThiNDMxMzk2YTk5MmZjMWI4YTM0MjMxZGQxYzI0YjFlOGFhMmU0MDlhYzBhZTA4YjA5MDllNjk3MmY2In0.eyJhdWQiOiIxIiwianRpIjoiMTk4OWUwMDk0Y2MzYjYzNTBlN2M1OGI0MzEzOTZhOTkyZmMxYjhhMzQyMzFkZDFjMjRiMWU4YWEyZTQwOWFjMGFlMDhiMDkwOWU2OTcyZjYiLCJpYXQiOjE1NzEyNjcxNzMsIm5iZiI6MTU3MTI2NzE3MywiZXhwIjoxNjAyODg5NTczLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.QfkvJvKoovQgmpC85URwEiWJzvG9QWucjyMTMVa5z47jtWRs940ipA_428UzCPqfqJj58GExNTi-f5gbwCORu_xKOGAskvBIY-zaIzzHGME_HbwFPORr1MEKv6zju-NFOh2adUQTDwRUN_FAxWsGOshUPFMXygAZzFgRUno7XQVu-Sn3JuhED2TucuoVFqU-qObaDjrIZbJPwstFke-thclnKTFYJodKtXlKRMldFtqGRWsGjuf_U2DQ53BrwML3uLSrFm5qO020NqOYPwfSqcrdh51KepzfL-sWZ7LgJ0QPn3y1PXbLD5aluG_fbEzT6wtm85R1forfU1dVDDoYfy_l9JvAh4y5SkjkbMr9kN-jJzF-2xu6JI48D7HyhJpXhPytSCaRM8RutRLbliuIgWYYo9kpDQ1a9bOpqyLQZWVvWoMiarkGknHLIq9eY9lpRKKxqB0BR4c6JWAoviN3ixoyL8-9x0TYZdFRNc726JAaSlxEnRP9IJs0lVUl7X-dI1WLMmHVU4tujvJey-oNV2DpOhNYFyGGDJWXC0T5nzgWPxZRTyV4gAdK41oYdX7vY0ueVX4bm5QnusMl0w9qle_OGaEbtaHuD0BwSNk3zzLKQCQ3APEfMReuwqZJObEUnMWIlKJPoIRZjk8j0ozGsmFD5yREwYXyuNXMzYH12zQ\"}', 460, '2019-10-16 15:18:44', '2019-10-16 15:18:44'),
(5, 3, NULL, 'test_123434677', 'paypal', NULL, '[{\"id\":1,\"name\":\"Product 1\",\"description\":\"Product 1 description\",\"file_name\":\"1.png\",\"image\":\"products/download/1\",\"price\":100,\"category_id\":1,\"portion_size\":null,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-23 19:10:18\",\"updated_at\":\"2019-09-23 19:10:18\",\"category\":\"Suppenkuche\",\"quantity\":1},{\"id\":1,\"name\":\"Product 1\",\"description\":\"Product 1 description\",\"file_name\":\"1.png\",\"image\":\"products/download/1\",\"price\":100,\"category_id\":1,\"portion_size\":null,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-23 19:10:18\",\"updated_at\":\"2019-09-23 19:10:18\",\"category\":\"Suppenkuche\",\"quantity\":2},{\"id\":4,\"name\":\"Product 4\",\"description\":\"Product 4 Description\",\"file_name\":\"1.png\",\"image\":\"products/download/4\",\"price\":50,\"category_id\":2,\"portion_size\":null,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-27 05:16:47\",\"updated_at\":\"2019-09-27 05:16:47\",\"category\":\"Antipasti\",\"quantity\":1},{\"id\":3,\"name\":\"Product 2\",\"description\":\"Product Description\",\"file_name\":\"3.png\",\"image\":\"products/download/3\",\"price\":50,\"category_id\":2,\"portion_size\":null,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-27 04:21:22\",\"updated_at\":\"2019-09-27 04:21:22\",\"category\":\"Antipasti\",\"quantity\":2},{\"id\":7,\"name\":\"PPPP\",\"description\":\"asdfasfdsafdsaf\",\"file_name\":\"7.png\",\"image\":\"products/download/7\",\"price\":22,\"category_id\":1,\"portion_size\":2,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-10-16 10:25:18\",\"updated_at\":\"2019-10-16 10:25:21\",\"category\":\"Suppenkuche\",\"quantity\":3}]', '{\"id\":3,\"first_name\":\"dragon\",\"surname\":\"super\",\"email\":\"dragon@ordering.co\",\"email_verified_at\":null,\"gender\":null,\"birthday\":null,\"phone\":null,\"company\":null,\"street\":null,\"house_number\":null,\"door_number\":null,\"additive\":null,\"post_code\":null,\"place\":null,\"country\":null,\"created_at\":\"2019-10-06 22:55:26\",\"updated_at\":\"2019-10-06 22:55:26\",\"token_type\":\"Bearer\",\"access_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU0NGYyNjM3OWNlY2Q5NTNkZmM0OTRjNWQ1ODc3NTI0ZGQxYjQxZmFkYWZmYjI5OTVhMzE1MjIxMTQ1YmIxNzEyZTk2YzZjMTg4OWZjYWYzIn0.eyJhdWQiOiIxIiwianRpIjoiZTQ0ZjI2Mzc5Y2VjZDk1M2RmYzQ5NGM1ZDU4Nzc1MjRkZDFiNDFmYWRhZmZiMjk5NWEzMTUyMjExNDViYjE3MTJlOTZjNmMxODg5ZmNhZjMiLCJpYXQiOjE1NzEyNzIzMjAsIm5iZiI6MTU3MTI3MjMyMCwiZXhwIjoxNjAyODk0NzIwLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.JGJzmZeYAKihWAvpNEZ3WL2Fkjn5OyGyL4Ila9fsz4GmxyDx42de6zs67ZzjvpFY8MGFNML3s3qOlKvrhRdzMDYXvz3ttGLPCvxDkEXNbmtqEHWKtXHcMl9x1S92G_eOFH6d8T2LB33UlbLSgORWol7rmzVMIzs6I0jod9mKAobSi1ZKeF2zvjlI340XA_C7GDk7ds62DA-k1f5InGFNtpv_W2ab5LqHaFdbmQ7--4yIR7AvveZAwQm-v46x0j-rbJ7EE7_csYe36qdQFcOiE-dyYKcUj8blN49_fIfmwAvuZDXJtvSAmvwOVxKpo6_Cj00vkrI7Ic45x30uLskjCS763qhYUYqdlcHTs40MltLUUOzJVWMNnnS5HnBZGf6jVvE0-vdovctsBlNINVr0a3PS6iAPr36H2POz-CL2E-ZHBCpVWRtQ7S7Z6PKPcmCUTcxR-NGQFtT_lq_jDUstibz_vyy8bnhXXgSmSL-rZ3mp3GGyIVRk6RNMKPhVabav9LzNrVT-7yoSG4HK_ffb-0ruGY6LdctQIJ6-G72UuITM2upgU-jGzAXVyIZsNnIm2P1j2FfeHzZ2va_rXWcAaGMfa93Cn9VJalKnbf7Sx2mjANr0IxX996LIRHc1Q5fKoeCjJuGLXCZFXtHi-ONdYEOaUPBtxSy62ulkRlWO90A\"}', 516, '2019-10-17 00:32:16', '2019-10-17 00:32:16'),
(6, 3, NULL, 'test_123434677', 'credit', NULL, '[{\"id\":1,\"name\":\"Product 1\",\"description\":\"Product 1 description\",\"file_name\":\"1.png\",\"image\":\"products/download/1\",\"price\":100,\"category_id\":1,\"portion_size\":null,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-09-23 19:10:18\",\"updated_at\":\"2019-09-23 19:10:18\",\"category\":\"Suppenkuche\",\"quantity\":2},{\"id\":7,\"name\":\"PPPP\",\"description\":\"asdfasfdsafdsaf\",\"file_name\":\"7.png\",\"image\":\"products/download/7\",\"price\":22,\"category_id\":1,\"portion_size\":2,\"allergens\":null,\"supplement\":null,\"created_at\":\"2019-10-16 10:25:18\",\"updated_at\":\"2019-10-16 10:25:21\",\"category\":\"Suppenkuche\",\"quantity\":3}]', '{\"id\":3,\"first_name\":\"dragon\",\"surname\":\"super\",\"email\":\"dragon@ordering.co\",\"email_verified_at\":null,\"gender\":null,\"birthday\":null,\"phone\":null,\"company\":null,\"street\":null,\"house_number\":null,\"door_number\":null,\"additive\":null,\"post_code\":null,\"place\":null,\"country\":null,\"created_at\":\"2019-10-06 22:55:26\",\"updated_at\":\"2019-10-06 22:55:26\",\"token_type\":\"Bearer\",\"access_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjkzMjkzYTM2ZmU1YmExNDc3MWYzODVkNTljMzA1ZDZmYWNmMTY1YWM3ODQxZGFiNzk5OWFlYmM1M2ZhMTA1MzliODhkZjRmYmU3N2EyZmE3In0.eyJhdWQiOiIxIiwianRpIjoiOTMyOTNhMzZmZTViYTE0NzcxZjM4NWQ1OWMzMDVkNmZhY2YxNjVhYzc4NDFkYWI3OTk5YWViYzUzZmExMDUzOWI4OGRmNGZiZTc3YTJmYTciLCJpYXQiOjE1NzEyNzM1MTMsIm5iZiI6MTU3MTI3MzUxMywiZXhwIjoxNjAyODk1OTEzLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.CtWjXLVz9iY_Axk8bMFT4Tli3rKJsr0-W6AhZ2UmYlIhVQ2KrwaFtLa-XXeE-scFKxYIqMhxYGo1--dZPe1qVLkNDyEe0fI-5zS4JJM1uU05BisIIMdzXUZ6P9OuyEedIpw6yD9L7RiJIHQU1qNEmMxX0eoQAbuYtEDu3dj2aM4U0nexrxq_CqhzktxNzcYb3whLGelVVEHGab1rVsmj1-MVIsbAbepfOUad1b-MNVitGS5nHcupnJOgjYvk0C7hH2ZZxu8_GgJ5sxAgS6PeJBExJ-thGM1Z-wm6K7GktBnk7MuVdITilF3ZfNwDGl1fGBSkUZBlEIp0fM2nH9bJ2hdzqL1P6sNqyc7aDPP4F1LDVYcXb7it-BHKYoHLXbWfUK2bGhgpLcY3Kheqc0FK6jIv4UmEjW26JP3Pjv2GAb46Lo5WBTKHx656MGU9-DN0BpQbwpRQW55o5JqluAfepdO547RhaPLvRAkvuAd9CwRoi-3tUSqfzA08Fs7IlRhplgCrgTLyIxzRrEoH-Uv1eW_ek6f74zrRU1eJxNvXVigzXHNnyM-It2KV41vJgiCBoiOPmIunKpoh9G9wmbhrdSAYpzJb5uRuwS8oHi88MV994q7B8PiuTTn-6iLxtR40LBiHkgGIjRrnRJo7XvePd1Znr6BxDWsmSoruRxGWKKQ\"}', 266, '2019-10-17 00:52:40', '2019-10-17 00:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `filename`, `path`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'gallery/download/1', '2019-10-06 19:51:34', '2019-10-06 19:51:34'),
(7, '7.jpg', 'gallery/download/7', '2019-10-06 23:58:01', '2019-10-06 23:58:02'),
(9, '9.jpg', NULL, '2019-10-07 00:11:57', '2019-10-07 00:11:57'),
(10, '10.jpg', NULL, '2019-10-07 00:12:12', '2019-10-07 00:12:12'),
(11, '11.jpg', NULL, '2019-10-07 00:20:49', '2019-10-07 00:20:49'),
(12, '12.jpg', NULL, '2019-10-07 00:41:04', '2019-10-07 00:41:04'),
(13, '13.jpg', 'gallery/download/13', '2019-10-07 03:05:33', '2019-10-07 03:05:34'),
(14, '14.jpg', 'gallery/download/14', '2019-10-07 03:06:04', '2019-10-07 03:06:05'),
(15, '15.jpg', 'gallery/download/15', '2019-10-16 10:27:08', '2019-10-16 10:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `portion_size` int(11) DEFAULT NULL,
  `allergens` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `supplement` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `file_name`, `image`, `price`, `category_id`, `portion_size`, `allergens`, `supplement`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'Product 1 description', '1.png', 'products/download/1', 100.00, 1, 22, NULL, NULL, '2019-09-23 19:10:18', '2019-10-17 18:32:13'),
(2, 'Product 2 as', 'Product 2 description as', '2.png', 'products/download/2', 160.00, 4, 2, NULL, NULL, '2019-09-27 04:20:28', '2019-10-18 01:20:15'),
(3, 'Product 2', 'Product Description', '3.png', 'products/download/3', 50.00, 2, NULL, NULL, NULL, '2019-09-27 04:21:22', '2019-09-27 04:21:22'),
(4, 'Product 4', 'Product 4 Description', '1.png', 'products/download/4', 50.00, 2, NULL, NULL, NULL, '2019-09-27 05:16:47', '2019-09-27 05:16:47'),
(6, 'Test Product', 'Test Product description', '6.jpg', 'products/download/6', 12.00, 2, 2, NULL, NULL, '2019-10-15 07:55:33', '2019-10-15 08:05:24'),
(8, 'PPP', 'sadfasfds', '8.jpg', 'products/download/8', 22.00, 3, 2, NULL, NULL, '2019-10-17 18:33:00', '2019-10-17 18:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `close` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `seated_burst` int(11) DEFAULT NULL,
  `guest_room` int(11) DEFAULT NULL,
  `guest_garden` int(11) DEFAULT NULL,
  `reviews` int(11) DEFAULT NULL,
  `rate` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `description`, `file_name`, `image`, `address`, `locations`, `phone`, `email`, `website`, `open`, `close`, `seated_burst`, `guest_room`, `guest_garden`, `reviews`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant', 'Restaurant Description', '1.png', 'restaurants/download/1', 'Restaurant address Graz', NULL, '18524441700', 'restaurant@email.com', 'https://pipapo-graz.at', '{\"hour\":11,\"minute\":0}', '{\"hour\":22,\"minute\":0}', NULL, NULL, NULL, NULL, NULL, '2019-09-23 16:13:02', '2019-10-18 06:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `setting_about`
--

CREATE TABLE `setting_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `content2` longtext DEFAULT NULL,
  `motto` varchar(255) NOT NULL,
  `reservation_contact` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_about`
--

INSERT INTO `setting_about` (`id`, `title`, `content`, `content2`, `motto`, `reservation_contact`, `modified`) VALUES
(1, 'Wir freuen uns auf Ihren Besuch!', 'Wir verarbeiten nur frische und qualitativ hochwertige Zutaten und setzen dabei auf regionale Produzenten und Lieferanten. Pasta erzeugen wir t??glich frisch in der hauseigenen Nudelmanufaktur. Durch unser Frontcooking-Prinzip kreieren wir unsere Speisen direkt vor unseren G??sten.', '', 'Transparenz ist das A und O bei PiPaPo!', '0316244913', '2019-10-11 14:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `setting_business`
--

CREATE TABLE `setting_business` (
  `id` int(11) NOT NULL,
  `company_wording` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) NOT NULL,
  `address_line_3` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uid_nr` varchar(255) DEFAULT NULL,
  `register_no` varchar(255) DEFAULT NULL,
  `jurisdiction` varchar(255) DEFAULT NULL,
  `start_d` varchar(255) NOT NULL,
  `end_d` varchar(255) NOT NULL,
  `open_hour` varchar(255) NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_business`
--

INSERT INTO `setting_business` (`id`, `company_wording`, `name`, `address_line_1`, `address_line_2`, `address_line_3`, `country`, `phone`, `email`, `uid_nr`, `register_no`, `jurisdiction`, `start_d`, `end_d`, `open_hour`, `modified`) VALUES
(1, 'Gerster GmbH', 'PiPaPo Marktrestaurant', 'Roseggerring 30', 'A-8054                  ', '         ', '??sterreich', '+43 (0)664 532 92 62              ', 'office@pipapo-graz.at', 'ATU74120738', '505926m', 'Landesgericht Graz', 'Montag', 'Sonntag', '10:30 bis 22:00 Uhr                    ', '2019-10-11 14:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `setting_contact`
--

CREATE TABLE `setting_contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `map` longtext NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_contact`
--

INSERT INTO `setting_contact` (`id`, `title`, `map`, `contact`, `email`, `address`, `modified`) VALUES
(1, 'Wir freuen uns auf Ihren Besuch!', '!1m14!1m8!1m3!1d10877.153838773356!2d15.4316525!3d47.0345702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6364133e526cb75d!2sPiPaPo%20Marktrestaurant%20Pizzeria!5e0!3m2!1sde!2sat!4v1570627972302!5m2!1sde!2sat', '0316/244913', 'office@pipapo-graz.at', 'Brauquartier 7, 8055 Graz', '2019-10-11 14:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `setting_gallery`
--

CREATE TABLE `setting_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `number_of_images` int(11) NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_gallery`
--

INSERT INTO `setting_gallery` (`id`, `title`, `subtitle`, `number_of_images`, `modified`) VALUES
(1, 'Buon Appetito!', 'Bilder sagen mehr als 1000 Worte.', 9, '2019-10-02 08:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `setting_home`
--

CREATE TABLE `setting_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `button1` varchar(255) NOT NULL,
  `button2` varchar(255) NOT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_home`
--

INSERT INTO `setting_home` (`id`, `title`, `subtitle`, `button1`, `button2`, `background_image`, `modified`) VALUES
(1, 'Benvenuto! ', 'im PiPaPo Graz Brauquartier!', 'SPEISEKARTE', '??FFNUNGSZEITEN', 'home.jpg', '2019-10-04 11:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `setting_menu`
--

CREATE TABLE `setting_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `download_button_title` varchar(255) NOT NULL,
  `menu_file` varchar(255) DEFAULT NULL,
  `background_content` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_menu`
--

INSERT INTO `setting_menu` (`id`, `title`, `subtitle`, `download_button_title`, `menu_file`, `background_content`) VALUES
(1, 'Unsere Speisekarte', 'Pizza, Pasta, Pomodoro und noch vieles mehr!', 'SPEISEKARTE', 'speisekarte_19-10-04.pdf', 'video.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `setting_social`
--

CREATE TABLE `setting_social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_social`
--

INSERT INTO `setting_social` (`id`, `facebook`, `youtube`, `twitter`, `instagram`) VALUES
(1, 'https://www.facebook.com/pipapograz/', NULL, NULL, 'https://www.instagram.com/pipapograz/');

-- --------------------------------------------------------

--
-- Table structure for table `setting_title`
--

CREATE TABLE `setting_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'PiPaPo Marktrestaurant &#8211; Pizza, Pasta, Pomodoro',
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_title`
--

INSERT INTO `setting_title` (`id`, `title`, `favicon`, `logo`, `modified`) VALUES
(1, 'PiPaPo Marktrestaurant ??? Pizza, Pasta, Pomodoro', 'favicon.png', 'logo.png', '2019-07-26 12:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_number` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `door_number` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additive` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `surname`, `password`, `email`, `email_verified_at`, `gender`, `birthday`, `phone`, `company`, `street`, `house_number`, `door_number`, `additive`, `post_code`, `place`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '$2y$10$2vc3dFX0o5wRFbAZHbA07ur6gGVNqSbxA2TNAnRnPBzcA26ZjBzxG', 'admin@pipapo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-23 10:16:08', '2019-09-23 10:16:08'),
(2, 'User', NULL, '$2y$10$2vc3dFX0o5wRFbAZHbA07ur6gGVNqSbxA2TNAnRnPBzcA26ZjBzxG', 'user@pipapo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-23 10:16:08', '2019-09-23 10:16:08'),
(3, 'dragon', 'super', '$2y$10$0gEoSTiRzFLbsHpFbytD3eeTMkhHUl7qIZvFghMLGDxwMnJL7jy3e', 'dragon@ordering.co', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-06 22:55:26', '2019-10-06 22:55:26'),
(4, 'Bai', 'Lang', '$2y$10$nGIkm2KUziupRn2qwTXg7ummtCFCNjMHJCxCJfkP96.cnyqAiysOi', 'bailang0324@outlook.com', NULL, 'Male', '1988-11-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-14 06:33:14', '2019-10-14 07:10:41'),
(5, 'Testv', 'Testn', '$2y$10$INcOkRQk6mkLgQbvymLNCe53Dmyulpz1hZbrvNYOXE1OxAXUBfIz2', 'Rl@deineseite.at', NULL, NULL, NULL, '123456', NULL, NULL, '12', NULL, NULL, NULL, 'Vienna', NULL, NULL, '2019-10-17 04:53:04', '2019-10-17 04:53:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_about`
--
ALTER TABLE `setting_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_business`
--
ALTER TABLE `setting_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_contact`
--
ALTER TABLE `setting_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_gallery`
--
ALTER TABLE `setting_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_home`
--
ALTER TABLE `setting_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_menu`
--
ALTER TABLE `setting_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_social`
--
ALTER TABLE `setting_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_title`
--
ALTER TABLE `setting_title`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_about`
--
ALTER TABLE `setting_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_business`
--
ALTER TABLE `setting_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_contact`
--
ALTER TABLE `setting_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_gallery`
--
ALTER TABLE `setting_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_home`
--
ALTER TABLE `setting_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_menu`
--
ALTER TABLE `setting_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_social`
--
ALTER TABLE `setting_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_title`
--
ALTER TABLE `setting_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
