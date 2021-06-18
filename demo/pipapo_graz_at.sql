-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: pipapo-graz.at.mysql.service.one.com:3306
-- Generation Time: Oct 16, 2019 at 06:24 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `file_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Suppenkuche', '1.jpg', 'categories/download/1', '2019-09-27 03:53:45', '2019-10-15 09:42:49'),
(2, 'Antipasti', '2.jpg', 'categories/download/2', '2019-09-27 03:54:32', '2019-10-15 09:43:11'),
(3, 'Gemusegarten', '3.png', 'categories/download/3', '2019-09-27 03:55:28', '2019-10-15 09:46:39'),
(4, 'Pizzabackerei', '4.png', 'categories/download/4', '2019-09-27 03:55:36', '2019-10-15 09:46:31'),
(5, 'Vom grill', '5.png', 'categories/download/5', '2019-09-27 03:55:44', '2019-10-15 18:48:01'),
(6, 'pasta', '6.png', 'categories/download/6', '2019-09-27 03:55:56', '2019-10-15 18:51:04'),
(7, 'alkoholfreies', NULL, NULL, '2019-09-27 03:56:03', '2019-09-27 03:56:03'),
(8, 'dolce', NULL, NULL, '2019-09-27 03:56:36', '2019-09-27 03:56:36'),
(9, 'caffe tee', NULL, NULL, '2019-09-27 03:56:55', '2019-09-27 03:56:55'),
(10, 'alkoholisches', NULL, NULL, '2019-09-27 03:57:10', '2019-09-27 03:57:10'),
(11, 'Vino', '11.png', 'categories/download/11', '2019-09-27 03:57:30', '2019-10-15 09:46:14'),
(12, 'Test Category', NULL, NULL, '2019-10-15 09:14:35', '2019-10-15 09:14:35'),
(13, 'Category Category', NULL, NULL, '2019-10-15 09:43:30', '2019-10-15 09:43:30'),
(14, 'CateCateCate', '14.png', 'categories/download/14', '2019-10-15 09:45:53', '2019-10-15 09:45:53'),
(15, 'TTTT', NULL, NULL, '2019-10-15 18:48:47', '2019-10-15 18:48:47');

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
(2, 'Contact Address', '18524441700', 'admin@pipapo.com', 'popapo.com', 'Paypal', '{\"hour\": 0, \"minute\": 0}', '{\"hour\": 0, \"minute\": 0}', NULL, NULL, NULL, NULL, NULL, '2019-10-03 01:48:31', '2019-10-05 10:30:34');

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
(2, 'datenschutz', '			\r\n			\r\n		<div id=\"fws_5d3ef578ab385\" data-midnight=\"dark\" data-bg-mobile-hidden=\"\" class=\"wpb_row row-fluid row standard_section   \" style=\"padding-top: 0px; padding-bottom: 0px; \"><div class=\"row-bg-wrap instance-0\"> <div class=\"row-bg    \" style=\"\" data-color_overlay=\"\" data-color_overlay_2=\"\" data-gradient_direction=\"\" data-overlay_strength=\"0.3\" data-enable_gradient=\"false\"></div> </div><div class=\"col span_12 dark left\">\r\n	<div class=\"col-sm-12 wpb_column column_container column_container col no-extra-padding instance-0\" data-bg-cover=\"\" data-padding-pos=\"all\" data-has-bg-color=\"false\" data-bg-color=\"\" data-bg-opacity=\"1\" data-hover-bg=\"\" data-hover-bg-opacity=\"1\" data-animation=\"\" data-delay=\"0\">\r\n		<div class=\"column-inner\">\r\n			<div class=\"wpb_wrapper\">\r\n				\r\n	<div class=\"wpb_text_column wpb_content_element \">\r\n		<div class=\"wpb_wrapper\">\r\n			<h4>Datenschutzerklärung</h4>\r\n<p>Die Website www.pipapo.at wird Ihnen von Gerster GmbH zur Verfügung gestellt. Sie können unsere Webseiten grundsätzlich besuchen, ohne uns mitzuteilen, wer Sie sind. Wir speichern in diesem Fall lediglich Zugriffsdaten ohne Personenbezug, wie den Namen Ihres Internetservice-Providers, die Website, von der aus Sie uns besuchen und den Namen der angeforderten Datei. Diese Informationen werden höchstens zu statistischen Zwecken ausgewertet und dienen der Verbesserung unserer Angebote. Sie bleiben als einzelner Nutzer hierbei anonym.</p>\r\n<h4>Erhebung und Verwendung personenbezogener Daten</h4>\r\n<p>Der Schutz Ihrer personenbezogenen Daten ist uns wichtig. Ihre personenbezogenen Daten werden von uns ausschließlich im Rahmen der einschlägigen Datenschutzbestimmungen erhoben und verwendet. Im Folgenden informieren wir Sie über Art und Umfang der von Ihnen erhobenen personenbezogenen Daten sowie die Zwecke, zu denen diese Daten erhoben und genutzt werden. Personenbezogene Daten sind Informationen zu Ihrer Identität, wie z.B. Name, Adresse, E-Mail-Adresse, Telefonnummer, IP-Daten.</p>\r\n<p>Personenbezogene Daten werden nur erhoben, wenn Sie uns diese von sich aus zur Beantwortung einer Anfrage oder zur Durchführung einer Reservierung/Bestellung mitteilen. Wir verwenden die von Ihnen mitgeteilten personenbezogenen Daten ausschließlich zu dem Zweck, zu dem Sie uns die Daten mitgeteilt haben. Werden Ihre Daten nicht mehr benötigt, werden diese gelöscht.</p>\r\n<p>Wir geben Ihre Daten einschließlich Ihrer Adresse und E-Mail-Adresse nicht an Dritte weiter.</p>\r\n<h4>Cookies</h4>\r\n<p>Um den Besuch unserer Website attraktiv zu gestalten und Ihnen die Nutzung bestimmter Funktionen zu ermöglichen, verwenden wir sog. Cookies. „Cookies“ sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden. Sitzungs-Cookies werden beim Schließen des Browsers automatisch gelöscht. Werden dauerhafte Cookies gesetzt, so ermöglichen diese, dass Ihr Rechner beim nächsten Besuch der Website wiedererkannt wird und unterstützen z. B. die Eingabe Ihres Benutzernamens. Selbstverständlich können Sie Cookies jederzeit ablehnen, sofern Ihr Browser dies zulässt.</p>\r\n<h4>Einsatz von Tracking-Technologien</h4>\r\n<p>Ferner werden auf unserer Website mittels Tracking-Technologien Informationen darüber, wie Sie unsere Website nutzen, zu Marketing- und Optimierungszwecken erhoben und gespeichert. Beim Zugriff auf unsere Website übermittelt Ihr Browser automatisch folgende Daten an unseren Webserver: Datum und Uhrzeit des Zugriffs, URL der zuvor aufgerufenen Website (sog. Referrer-URL), aufgerufene Datei, Menge der gesendeten Daten, Typ und Version des von Ihnen benutzten Browsers, Ihr Betriebssystem sowie Ihre IP-Adresse. Aus diesen Daten können unter Verwendung eines Pseudonyms Nutzungsprofile erstellt werden. Hierzu können Cookies eingesetzt werden, die lokal im Zwischenspeicher Ihres Internet-Browsers gespeichert werden. Die Cookies ermöglichen die Wiedererkennung des Internet-Browsers. Diese Daten werden getrennt von anderen Daten, die Sie im Rahmen der Nutzung unseres Angebotes eingeben, gespeichert und nicht dazu benutzt, den Besucher dieser Website persönlich zu identifizieren. Eine Zuordnung dieser Daten zu einer konkreten Person erfolgt nicht. Im Anschluss an statistische Auswertungen werden diese Daten gelöscht. Der Datenerhebung und -speicherung kann jederzeit mit Wirkung für die Zukunft widersprochen werden.</p>\r\n<h4>Sicherheit</h4>\r\n<p>Unsere Website und die sonstigen Systeme sichern wir durch technische und organisatorische Maßnahmen gegen Zerstörung, Verlust, Zugriff, Veränderung oder Verbreitung Ihrer Daten durch unbefugte Personen. Ein vollständiger Schutz gegen alle Gefahren ist jedoch trotz regelmäßiger Kontrollen nicht möglich. Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>\r\n<h4>Einsatz von Google Analytics</h4>\r\n<p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) werden an einen Server von Google in den USA übertragen und dort gespeichert.</p>\r\n<p>Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben ist oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten in Verbindung bringen.</p>\r\n<p>Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden. Der Datenerhebung und -speicherung kann jederzeit mit Wirkung für die Zukunft widersprochen werden. Unsere Kontaktadresse für den Widerspruch finden Sie unten oder in unserem Impressum. Alternativ können Sie das Deaktivierungs-Add-on von Google Analytics (http://tools.google.com/dlpage/gaoptout?hl=de) verwenden, sofern es für Ihren Browser verfügbar ist.</p>\r\n<p>Es wird darauf hingewiesen, dass diese Website Google Analytics mit der Erweiterung „_anonymizeIp()“ verwendet und daher IP-Adressen nur gekürzt weiterverarbeitet werden, um eine direkte Personenbeziehbarkeit auszuschließen.</p>\r\n<h4>Einsatz von Google Maps</h4>\r\n<p>Auf dieser Webseite nutzen wir das Angebot von Google Maps. Dadurch können wir Ihnen interaktive Karten direkt in der Website anzeigen und ermöglichen Ihnen die komfortable Nutzung der Karten-Funktion.</p>\r\n<p>Durch den Besuch auf der Website erhält Google die Information, dass Sie die entsprechende Unterseite unserer Website aufgerufen haben. Dies erfolgt unabhängig davon, ob Google ein Nutzerkonto bereitstellt, über das Sie eingeloggt sind, oder ob kein Nutzerkonto besteht. Wenn Sie bei Google eingeloggt sind, werden Ihre Daten direkt Ihrem Konto zugeordnet. Wenn Sie die Zuordnung mit Ihrem Profil bei Google nicht wünschen, müssen Sie sich vor Aktivierung des Buttons ausloggen. Google speichert Ihre Daten als Nutzungsprofile und nutzt sie für Zwecke der Werbung, Marktforschung und/oder bedarfsgerechten Gestaltung seiner Website. Eine solche Auswertung erfolgt insbesondere (selbst für nicht eingeloggte Nutzer) zur Erbringung von bedarfsgerechter Werbung und um andere Nutzer des sozialen Netzwerks über Ihre Aktivitäten auf unserer Website zu informieren. Ihnen steht ein Widerspruchsrecht zu gegen die Bildung dieser Nutzerprofile, wobei Sie sich zur Ausübung dessen an Google richten müssen.</p>\r\n<p>Weitere Informationen zu Zweck und Umfang der Datenerhebung und ihrer Verarbeitung durch den Plug-in-Anbieter erhalten Sie in den Datenschutzerklärungen des Anbieters. Dort erhalten Sie auch weitere Informationen zu Ihren diesbezüglichen Rechten und Einstellungsmöglichkeiten zum Schutze Ihrer Privatsphäre: Datenschutzerklärung von Google (https://www.google.de/intl/de/policies/privacy). Google verarbeitet Ihre personenbezogenen Daten auch in den USA und hat sich dem EU-US Privacy Shield (https://www.privacyshield.gov/EU-US-Framework) unterworfen.</p>\r\n<h4>Weitere Informationen</h4>\r\n<p>Sie können jederzeit unentgeltlich Auskunft über Ihre gespeicherten Daten verlangen und haben ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Wenn Sie Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer personenbezogenen Daten haben, sowie im Falle von Auskünften, Berichtigung, Sperrung oder Löschung von personenbezogenen Daten sowie für Widerrufe erteilter Einwilligungen wenden Sie sich bitte an:</p>\r\n<p>Gerster GmbH</p><p>Roseggerring 30, 8054 Seiersberg-Pirka</p><p>Österreich<br></p>\r\n<p>T: +43 (0)664 – 543 62 92<br>\r\nE: office@pipapo-graz.at</p>\r\n<p>UID: ATU74120738<br>\r\nFN: 505826m<br>\r\nGericht: Landesgericht Graz</p>\r\n\r\n		</div>\r\n	</div>\r\n\r\n			</div> \r\n		</div>\r\n	</div> \r\n</div></div>\r\n', '2019-10-11 14:21:34'),
(3, 'impressum', '<div class=\"column-inner\">\r\n                                <div class=\"wpb_wrapper\">\r\n\r\n                                    <div class=\"wpb_text_column wpb_content_element \">\r\n                                        <div class=\"wpb_wrapper\">\r\n                                            <h1 style=\"font-size: 45px; line-height: 50px;\">Offenlegung nach § 25 Mediengesetz · Copyright · Haftung</h1>\r\n\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"divider-wrap\">\r\n                                        <div style=\"height: 30px;\" class=\"divider\"></div>\r\n                                    </div>\r\n                                    <div class=\"wpb_text_column wpb_content_element \">\r\n                                        <div class=\"wpb_wrapper\">\r\n                                            <p>Der Inhalt, einschließlich Bilder, und die Gestaltung der Webseite unterliegen dem Schutz des Urheberrechts und anderer Gesetze zum Schutz geistigen Eigentums, unabhängig von jeglicher Kennzeichnung (z.B. ©, ®, oder TM Vermerk).</p>\r\n                                            <p>Im Hinblick auf die technischen Eigenschaften des Internet kann keine Gewähr für die Authentizität, Richtigkeit und Vollständigkeit der im Internet zur Verfügung gestellten Informationen übernommen werden. Es wird auch keine Gewähr für die Verfügbarkeit oder den Betrieb der gegenständlichen Homepage und ihrer Inhalte übernommen.</p>\r\n                                            <p>Jede Haftung für unmittelbare, mittelbare oder sonstige Schäden, unabhängig von deren Ursachen, die aus der Benutzung oder Nichtverfügbarkeit der Daten und Informationen dieser Homepage erwachsen, wird, soweit rechtlich zulässig, ausgeschlossen.</p>\r\n                                            <p>Der Inhalt dieser Homepage ist urheberrechtlich geschützt. Die Informationen sind nur für die persönliche Verwendung bestimmt. Jede weitergehende Nutzung insbesondere die Speicherung in Datenbanken, Vervielfältigung und jede Form von gewerblicher Nutzung sowie die Weitergabe an Dritte – auch in Teilen oder in überarbeiteter Form – ohne Zustimmung der jeweiligen Organisation ist untersagt.</p>\r\n\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                </div>\r\n                            </div>', '2019-10-11 14:19:56'),
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
('43a8b7e66e3baef1989d6e1f36e53171141f312eae49830d650c81e1a0ed5caf286b8b8cb81d7206', 1, 1, 'Pipapo', '[]', 0, '2019-10-14 02:51:05', '2019-10-14 02:51:05', '2020-10-14 10:51:05'),
('45bd7717a2f3a141e73b7ee712c19b666b457823974e1d3136378127c14e8967f2bc517ee3cfdba9', 4, 1, 'Pipapo', '[]', 0, '2019-10-14 06:33:14', '2019-10-14 06:33:14', '2020-10-14 14:33:14'),
('4a2caf9be9e7b71617b113c0a4cd00a3d6b018eaeee560138119fe97c67f11a2422cea5d2766ef1e', 3, 1, 'Pipapo', '[]', 0, '2019-10-14 19:18:42', '2019-10-14 19:18:42', '2020-10-15 03:18:42'),
('56400306a70ab1edec48ad5d8f727bbb3b440fd3e8d6841f0853ae048216b24ebf57a46ec13ccece', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 00:21:23', '2019-10-15 00:21:23', '2020-10-15 08:21:23'),
('5e33f7c705870b4edece7e5bf3547111e5d78b94da905c16a1cfc85506ffaa0a5339437af7482873', 1, 1, 'Pipapo', '[]', 0, '2019-10-14 02:46:28', '2019-10-14 02:46:28', '2020-10-14 10:46:28'),
('6998f0a544c2fad0c644e8b59180e7be17dc5dd4ade31ecffab368a5610e27efee3fdbfdee272eb5', 2, 1, 'Pipapo', '[]', 0, '2019-10-14 06:29:20', '2019-10-14 06:29:20', '2020-10-14 14:29:20'),
('800d5151fa6c3aa5124226234f69bab0d3418d35cbbca33f61671a4e28dc2f793d06d51dfb4cc69b', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 02:01:11', '2019-10-15 02:01:11', '2020-10-15 10:01:11'),
('8e70c0af70ad865d9cad63e4da7d557bce9043d741c33122edf579669ed69e6e3113de14e1a2e486', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 00:22:52', '2019-10-15 00:22:52', '2020-10-15 08:22:52'),
('9347920d0d4833339865029d128fae50c009b9db884b75f6f7f7fdcff5a3ba06bfdd01d86c0d255e', 1, 1, 'Pipapo', '[]', 0, '2019-10-15 18:44:54', '2019-10-15 18:44:54', '2020-10-15 18:44:54'),
('955486c7bbb8969e392ce24085dd428a9d0330ccbe3e4fe507c017ab5cef8b3cb6ce567380b2a3ac', 4, 1, 'Pipapo', '[]', 0, '2019-10-15 00:30:21', '2019-10-15 00:30:21', '2020-10-15 08:30:21'),
('9ab57f2fd7f440bf6b90637271532f79ffe7b5e9cbba675a3d12bcd57f74f3a22a2c0cd953b8a3b0', 2, 1, 'Pipapo', '[]', 0, '2019-10-14 02:33:51', '2019-10-14 02:33:51', '2020-10-14 10:33:51'),
('d395c990ea0a21bc43616747f07ba77698e82d6ba8f801dcfbbe4128fa469e123ac2fb0d03cb3ff8', 3, 1, 'Pipapo', '[]', 0, '2019-10-15 00:53:34', '2019-10-15 00:53:34', '2020-10-15 08:53:34'),
('e0d4862fded01d44f708d0cbd1f67073aa7768446e27606320edd70376b137d9d4599af567f471b0', 4, 1, 'Pipapo', '[]', 0, '2019-10-14 06:40:12', '2019-10-14 06:40:12', '2020-10-14 14:40:12'),
('edef3ebb038adc9cc43083adf5bd28bfc22232ace096f303c81760b2c53fc0b5c845795592527e44', 3, 1, 'Pipapo', '[]', 0, '2019-10-14 19:37:45', '2019-10-14 19:37:45', '2020-10-15 03:37:45');

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
  `paymethod` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `customer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `comment`, `paymethod`, `location`, `products`, `customer`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Paypal', '{\"lat\": 11.1, \"lng\": 21.1}', '{\"id\": 2, \"name\": \"Product 2\", \"image\": \"products/download/2\", \"price\": 150, \"category\": 3, \"allergens\": null, \"file_name\": \"2.png\", \"created_at\": \"2019-09-27 12:20:28\", \"supplement\": null, \"updated_at\": \"2019-09-27 15:03:50\", \"description\": \"Product 2 description\", \"portion_sizes\": null}', '{\"id\": 1, \"email\": \"admin@pipapo.com\", \"phone\": null, \"place\": null, \"strabe\": null, \"surname\": null, \"host_code\": null, \"created_at\": \"2019-09-23 18:16:08\", \"first_name\": \"Admin\", \"updated_at\": \"2019-09-23 18:16:08\", \"house_number\": null, \"email_verified_at\": null}', '2019-09-27 07:16:13', '2019-09-27 07:16:13');

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
(4, '4.jpg', 'gallery/download/4', '2019-10-06 20:54:22', '2019-10-06 20:54:22'),
(6, '6.jpg', 'gallery/download/6', '2019-10-06 23:53:18', '2019-10-06 23:53:18'),
(7, '7.jpg', 'gallery/download/7', '2019-10-06 23:58:01', '2019-10-06 23:58:02'),
(9, '9.jpg', NULL, '2019-10-07 00:11:57', '2019-10-07 00:11:57'),
(10, '10.jpg', NULL, '2019-10-07 00:12:12', '2019-10-07 00:12:12'),
(11, '11.jpg', NULL, '2019-10-07 00:20:49', '2019-10-07 00:20:49'),
(12, '12.jpg', NULL, '2019-10-07 00:41:04', '2019-10-07 00:41:04'),
(13, '13.jpg', 'gallery/download/13', '2019-10-07 03:05:33', '2019-10-07 03:05:34'),
(14, '14.jpg', 'gallery/download/14', '2019-10-07 03:06:04', '2019-10-07 03:06:05');

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
(1, 'Product 1', 'Product 1 description', '1.png', 'products/download/1', 100.00, 1, NULL, NULL, NULL, '2019-09-23 19:10:18', '2019-09-23 19:10:18'),
(2, 'Product 2', 'Product 2 description', '2.png', 'products/download/2', 150.00, 3, NULL, NULL, NULL, '2019-09-27 04:20:28', '2019-09-27 07:03:50'),
(3, 'Product 2', 'Product Description', '3.png', 'products/download/3', 50.00, 2, NULL, NULL, NULL, '2019-09-27 04:21:22', '2019-09-27 04:21:22'),
(4, 'Product 4', 'Product 4 Description', '1.png', 'products/download/4', 50.00, 2, NULL, NULL, NULL, '2019-09-27 05:16:47', '2019-09-27 05:16:47'),
(6, 'Test Product', 'Test Product description', '6.jpg', 'products/download/6', 12.00, 2, 2, NULL, NULL, '2019-10-15 07:55:33', '2019-10-15 08:05:24');

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
(1, 'Restaurant', 'Restaurant Description', '1.png', 'restaurants/download/1', 'Restaurant address', NULL, '18524441700', 'restaurant@email.com', 'https://pipapo-graz.at/demo', '{\"hour\": 12, \"minute\": 30}', '{\"hour\": 22, \"minute\": 30}', NULL, NULL, NULL, NULL, NULL, '2019-09-23 16:13:02', '2019-10-02 23:52:32');

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
(1, 'Wir freuen uns auf Ihren Besuch!', 'Wir verarbeiten nur frische und qualitativ hochwertige Zutaten und setzen dabei auf regionale Produzenten und Lieferanten. Pasta erzeugen wir täglich frisch in der hauseigenen Nudelmanufaktur. Durch unser Frontcooking-Prinzip kreieren wir unsere Speisen direkt vor unseren Gästen.', '', 'Transparenz ist das A und O bei PiPaPo!', '0316244913', '2019-10-11 14:24:37');

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
(1, 'Gerster GmbH', 'PiPaPo Marktrestaurant', 'Roseggerring 30', 'A-8054                  ', '         ', 'Österreich', '+43 (0)664 532 92 62              ', 'office@pipapo-graz.at', 'ATU74120738', '505926m', 'Landesgericht Graz', 'Montag', 'Sonntag', '10:30 bis 22:00 Uhr                    ', '2019-10-11 14:24:04');

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
(1, 'Benvenuto! ', 'im PiPaPo Graz Brauquartier!', 'SPEISEKARTE', 'ÖFFNUNGSZEITEN', 'home.jpg', '2019-10-04 11:00:25');

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
(1, 'PiPaPo Marktrestaurant – Pizza, Pasta, Pomodoro', 'favicon.png', 'logo.png', '2019-07-26 12:33:40');

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
(4, 'Bai', 'Lang', '$2y$10$nGIkm2KUziupRn2qwTXg7ummtCFCNjMHJCxCJfkP96.cnyqAiysOi', 'bailang0324@outlook.com', NULL, 'Male', '1988-11-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-14 06:33:14', '2019-10-14 07:10:41');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
