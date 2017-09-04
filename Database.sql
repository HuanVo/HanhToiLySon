-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2017 lúc 05:44 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `databasedemohanhtoilyson`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `name`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Võ Văn Huấn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advertisement`
--

CREATE TABLE `advertisement` (
  `idQC` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `descript` varchar(255) NOT NULL DEFAULT '',
  `Url` varchar(255) NOT NULL DEFAULT '',
  `urlHinh` varchar(255) NOT NULL DEFAULT '',
  `created` date NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articcles`
--

CREATE TABLE `articcles` (
  `id` smallint(12) NOT NULL,
  `id_categories` smallint(255) NOT NULL,
  `name_categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `view` int(12) NOT NULL,
  `status` bit(1) NOT NULL,
  `creates` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articcles`
--

INSERT INTO `articcles` (`id`, `id_categories`, `name_categories`, `name`, `image`, `content`, `view`, `status`, `creates`) VALUES
(4, 5, 'Thực phẩm', 'Ăn tỏi sống chữa ít bệnh', 'Tri-mun-bang-toi-1188c-crop1387771179667p.jpg', '<h2>C&oacute; những người kh&ocirc;ng ăn được tỏi do dị ứng hoặc kh&ocirc;ng ti&ecirc;u h&oacute;a được. Trường hợp dị ứng tỏi nghi&ecirc;m trọng cũng c&oacute; th&ecirc;̉ ảnh hưởng đ&ecirc;́n sức khỏe.</h2>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/upload/tin-tuc/images/tem1.png\" style=\"height:550px; width:650px\" /></p>\r\n\r\n<p>Tỏi (danh ph&aacute;p hai phần: Allium sativum) l&agrave; một lo&agrave;i thực vật thuộc họ h&agrave;nh, nghĩa l&agrave; c&oacute; họ h&agrave;ng với h&agrave;nh t&acirc;y, h&agrave;nh ta, h&agrave;nh t&iacute;m, tỏi t&acirc;y...</p>\r\n\r\n<p>Tỏi ta, t&ecirc;n khoa học l&agrave; Alliumsativum L, họ h&agrave;nh Alliaceac (trước kia gọi l&agrave; họ h&agrave;nh tỏi Liliaceae) v&agrave; cũng được con người sử dụng l&agrave;m gia vị, thuốc, rau như những lo&agrave;i họ h&agrave;ng của n&oacute;.</p>\r\n\r\n<p>Mặc d&ugrave; tỏi c&oacute; nhiều c&ocirc;ng dụng trong trị liệu nhiều bệnh, cũng đ&atilde; c&oacute; h&agrave;ng ng&agrave;n c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu về t&aacute;c dụng chữa bệnh v&agrave; c&aacute;c chế phẩm l&agrave;m thuốc từ củ tỏi ta (hiện nay vẫn tiếp tục nghi&ecirc;n cứu).</p>\r\n\r\n<p>Kết quả cho thấy, c&oacute; nhiều t&aacute;c dụng trong trị liệu đặc biệt l&agrave; t&aacute;c dụng ph&ograve;ng chống ung thư, ph&ograve;ng chống c&aacute;c bệnh tim mạch, l&agrave;m giảm đường huyết, tăng cường hệ miễn dịch, t&aacute;c dụng kh&aacute;ng sinh, chống nhiễm độc chất ph&oacute;ng xạ...</p>\r\n\r\n<p>Bởi n&oacute; l&agrave;m tăng thải trừ c&aacute;c chất đồng vị ph&oacute;ng xạ v&agrave; giảm sự t&iacute;ch đọng c&aacute;c chất đồng vị ph&oacute;ng xạ trong cơ thể, giải độc nicotin mạn t&iacute;nh&hellip;</p>\r\n\r\n<p>Song trong t&eacute;p tỏi tươi, lại c&oacute; c&aacute;c hợp chất sulfur l&agrave; quan trọng nhất, c&oacute; tỷ lệ cao nhất trong c&aacute;c loại rau quả (3,2%) khi t&eacute;p tỏi c&ograve;n nguy&ecirc;n: alliin (một hợp chất sulfur) v&agrave; men allinase c&oacute; lượng tương đương nhau. Mỗi thứ ở trong một ngăn ri&ecirc;ng biệt.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/upload/tin-tuc/images/Tri-mun-bang-toi-1188c-crop1387771179667p.jpg\" style=\"height:337px; width:660px\" /></p>\r\n\r\n<p>Khi gi&atilde; n&aacute;t củ tỏi - một phản ứng cực mạnh, tức th&igrave; giữa alliin v&agrave; allinase sản sinh ra allicin - Allicin l&agrave; một chất kh&ocirc;ng bền, khi tiếp x&uacute;c với kh&ocirc;ng kh&iacute; sẽ được chuyển h&oacute;a th&agrave;nh diallyl disulfide, vinydithiin, afoene, l&agrave; những chất c&oacute; t&aacute;c dụng dược l&yacute; đ&atilde; kể tr&ecirc;n (allicin l&agrave; chất g&acirc;y m&ugrave;i tỏi tươi khi băm th&aacute;i).</p>\r\n\r\n<p>Bằng phương ph&aacute;p sắc k&yacute; lỏng cao &aacute;p người ta đ&atilde; x&aacute;c định được h&agrave;m lượng allicin trong t&eacute;p tỏi tươi sau khi gi&atilde; n&aacute;t một ph&uacute;t đ&atilde; đạt 63%. Nhưng sau 30 ph&uacute;t tiếp x&uacute;c với kh&ocirc;ng kh&iacute; chỉ c&ograve;n 39% (v&igrave; đ&atilde; chuyển h&oacute;a th&agrave;nh c&aacute;c chất n&oacute;i tr&ecirc;n).</p>\r\n\r\n<p>Trong m&ocirc;i trường hơi kiềm (pH = 8) phản ứng triệt để nhất. Trong m&ocirc;i trường hơi acid (pH = 5) phản ứng chậm 50 lần. Tỏi tươi nguy&ecirc;n t&eacute;p v&agrave; tỏi đ&atilde; l&agrave;m ch&iacute;n kh&ocirc;ng c&oacute; m&ugrave;i v&agrave; kh&ocirc;ng c&oacute; t&aacute;c dụng dược l&yacute; n&ecirc;u tr&ecirc;n.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, tỏi gi&uacute;p phục hồi alycin, một hợp chất tự nhi&ecirc;n trong cơ thể c&oacute; t&aacute;c dụng chống ung thư, giảm cholesterol, giảm huyết &aacute;p, c&oacute; khả năng giết 60 loại nấm độc, đồng thời l&agrave;m ph&aacute;t triển 20 loại vi khuẩn c&oacute; &iacute;ch đối với phụ nữ m&atilde;n kinh.</p>\r\n\r\n<p>Mặt kh&aacute;c, theo đ&ocirc;ng y tỏi c&oacute; vị cay, t&iacute;nh &ocirc;n, hơi độc, c&oacute; t&aacute;c dụng thanh nhiệt, giải độc, s&aacute;t khuẩn; chữa kh&iacute; hư, tiểu tiện kh&oacute;, bụng trướng đầy, ti&ecirc;u nhọt, đờm v&agrave; hạch ở phổi, tẩy uế...</p>\r\n\r\n<p>Song người ta cũng cho biết, ăn nhiều tỏi c&oacute; thể g&acirc;y ảnh hưởng đến mắt, gan, thận v&agrave; một số bệnh kh&aacute;c. Bởi vậy những người dưới đ&acirc;y l&agrave; kh&ocirc;ng n&ecirc;n ăn tỏi:</p>\r\n', 6, b'1', '2017-08-13 16:42:38'),
(5, 5, 'Thực phẩm', 'Những loại đặc sản lọt top quà tặng nổi tiếng nhất Việt Nam', '1_163116.jpg', '<p>Việt Nam nổi tiếng thế giới với nền văn h&oacute;a ẩm thực đa dạng, trỉa d&agrave;i tr&ecirc;n khắp mọi miền Tổ quốc. Những đặc sản n&agrave;y đ&atilde; v&agrave; đang l&agrave; niềm tự h&agrave;o của người d&acirc;n bản xứ n&oacute;i ri&ecirc;ng v&agrave; của người Việt n&oacute;i chung.</p>\r\n\r\n<p><strong>Việt Nam nổi tiếng thế giới với nền văn h&oacute;a ẩm thực đa dạng, trỉa d&agrave;i tr&ecirc;n khắp mọi miền Tổ quốc. Những đặc sản n&agrave;y đ&atilde; v&agrave; đang l&agrave; niềm tự h&agrave;o của người d&acirc;n bản xứ n&oacute;i ri&ecirc;ng v&agrave; của người Việt n&oacute;i chung.</strong></p>\r\n\r\n<p><strong>Ch&egrave; Shan tuyết Suối Gi&agrave;ng (tỉnh Y&ecirc;n B&aacute;i)</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/upload/tin-tuc/images/1_163116.jpg\" style=\"height:344px; width:517px\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Để pha được một ấm ch&egrave; Shan Tuyết thơm hương, đậm vị v&agrave; nước m&agrave;u v&agrave;ng &oacute;ng, người d&acirc;n ở Suối Gi&agrave;ng thường d&ugrave;ng loại ấm đất nung gi&agrave; v&agrave; nước tr&ecirc;n n&uacute;i chảy về đun s&ocirc;i đủ độ. Sau kh&acirc;u tr&aacute;ng ch&egrave; l&agrave; chế nước s&ocirc;i v&agrave;o đầy ấm để bọt tr&agrave;o ra ngo&agrave;i, đậy nắp lại chờ chừng 10 ph&uacute;t. Ch&egrave; được r&oacute;t l&agrave;m hai lượt để c&aacute;c ch&eacute;n c&oacute; m&agrave;u v&agrave; vị như nhau. Nguồn: Internet</p>\r\n\r\n<p>Ch&egrave; cổ thụ Shan tuyết l&agrave; tặng vật của d&atilde;y Ho&agrave;ng Li&ecirc;n Sơn cho Suối Gi&agrave;ng. Từ những năm 1960, nhiều nh&agrave; nghi&ecirc;n cứu về c&acirc;y ch&egrave; ở Việt Nam v&agrave; thế giới đ&atilde; t&igrave;m thấy ở đ&acirc;y tr&ecirc;n 80.000 c&acirc;y ch&egrave; từ 200 tuổi trở l&ecirc;n, trong số đ&oacute; c&oacute; rất nhiều c&acirc;y tr&ecirc;n 300 tuổi. C&ograve;n loại c&acirc;y ch&egrave; v&agrave;o khoảng 100 năm tuổi th&igrave; nhiều v&ocirc; kể. Những c&acirc;y ch&egrave; cổ thụ Shan tuyết to lớn th&acirc;n nhuộm m&agrave;u trắng mốc, uốn lượn nhiều c&agrave;nh buộc người h&aacute;i phải tr&egrave;o l&ecirc;n mới thu hoạch được. Ch&egrave; ở đ&acirc;y b&uacute;p to, phủ một lớp l&ocirc;ng tơ mịn như nhung, trắng như tuyết. Bởi thế người ta gọi l&agrave; ch&egrave; Shan Tuyết.</p>\r\n\r\n<p>Ch&egrave; chịu đựng gi&aacute; buốt suốt m&ugrave;a đ&ocirc;ng tr&ecirc;n đỉnh n&uacute;i, ngậm từng hạt sương sớm khi giao m&ugrave;a, ủ từng khối m&ugrave; m&acirc;y mỗi sớm. Những c&acirc;y ch&egrave; l&uacute;c n&agrave;y hội tụ tất cả tinh hoa đất trời thi&ecirc;n nhi&ecirc;n ban tặng n&ecirc;n cho vị đượm hơn cả.</p>\r\n\r\n<p>Đến với Y&ecirc;n B&aacute;i, bạn c&ograve;n được nghe b&agrave; con người M&ocirc;ng kể c&acirc;u chuyện về đ&agrave;n khỉ h&aacute;i ch&egrave; Shan tuyết. Người ta kể rằng, xa xưa để h&aacute;i được ch&egrave;, m&agrave; kh&ocirc;ng phải leo l&ecirc;n c&acirc;y ch&egrave;, &ocirc;ng cha ta đ&atilde; huấn luyện c&aacute;c ch&uacute; khỉ để l&agrave;m việc h&aacute;i ch&egrave; thay cho người. C&aacute;c đồi ch&egrave; cao gần 1400m, ch&ecirc;nh v&ecirc;nh r&igrave;a n&uacute;i m&eacute;p vực được đ&agrave;n khỉ leo l&ecirc;n, h&aacute;i ch&egrave; v&agrave; n&eacute;m gọn g&agrave;ng v&agrave;o quẩy tấu (g&ugrave;i), người d&acirc;n chỉ việc lấy g&ugrave;i về nh&agrave; đem sao chế ch&egrave;, kh&ocirc;ng phải tốn c&ocirc;ng sức h&aacute;i ch&egrave;. Ng&agrave;y nay những gốc c&acirc;y ch&egrave; shan tuyết cổ thụ với th&acirc;n nh&aacute;nh vạm vỡ vẫn c&ograve;n nh&igrave;n thấy r&otilde; vết t&iacute;ch của khỉ h&aacute;i ch&egrave;...</p>\r\n\r\n<p><strong>B&aacute;nh đậu xanh Hải Dương (tỉnh Hải Dương)</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/upload/tin-tuc/images/2_80097.jpg\" style=\"height:255px; width:460px\" /></strong></p>\r\n\r\n<p>B&aacute;nh đậu xanh Hải Dương được sản xuất từ bột đậu xanh nguy&ecirc;n chất, với đường trắng tinh luyện v&agrave; dầu thực vật. Đ&acirc;y l&agrave; loại thực phẩm gi&agrave;u dinh dưỡng, th&iacute;ch hợp với mọi lứa tuổi. Nguồn: Internet.</p>\r\n\r\n<p>B&aacute;nh đậu xanh được sản xuất từ bột đậu xanh nguy&ecirc;n chất, đường trắng tinh luyện v&agrave; dầu thực vật. B&aacute;nh đậu xanh l&agrave; loại thực phẩm gi&agrave;u dinh dưỡng th&iacute;ch hợp với mọi lứa tuổi nhất l&agrave; người gi&agrave; v&agrave; trẻ em.</p>\r\n\r\n<p>Phương ph&aacute;p thưởng thức m&oacute;n đặc sản miền Bắc n&agrave;y sao cho đ&uacute;ng điệu cũng l&agrave; một nghệ thuật. Khi thưởng thức b&aacute;nh đậu xanh Hải Dương phải chầm chậm cho từng miếng một v&agrave;o miệng, để từng miếng b&aacute;nh tan v&agrave;o trong miệng mới cảm nhận hết được vị ngon của b&aacute;nh. Th&ecirc;m một ch&eacute;n tr&agrave; n&oacute;ng bạn sẽ thấy b&aacute;nh thật ngậy v&agrave; thơm ngon, m&aacute;t dịu.</p>\r\n\r\n<p><strong>T&ocirc;m kh&ocirc; (tỉnh C&agrave; Mau)</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/upload/tin-tuc/images/3_261671.png\" style=\"height:282px; width:460px\" /></strong></p>\r\n\r\n<p>Để c&oacute; được sản phẩm mang hương vị đặt trưng của rừng, biển, t&ocirc;m phải được luột trong nước thật s&ocirc;i từ 5-6 ph&uacute;t, rồi mới cho muối v&agrave;o luột th&ecirc;m 4-5 ph&uacute;t nữa sau đ&oacute; mới đem ra phơi nắng hoặc sấy. Nguồn: Internet.</p>\r\n\r\n<p>C&agrave; Mau l&agrave; v&ugrave;ng đất trời ph&uacute; cho hệ sinh th&aacute;i đa dạng n&ecirc;n cũng sản sinh ra nhiều loại đặc sản hấp dẫn du kh&aacute;ch. Khi tới du lịch C&agrave; Mau, c&oacute; nhiều loại đặc sản để du kh&aacute;ch lựa chon nhưng c&oacute; một thứ m&agrave; du kh&aacute;ch kh&ocirc;ng n&ecirc;n bỏ qua đ&oacute; l&agrave; t&ocirc;m kh&ocirc;. Rất nhiều du kh&aacute;ch đến với C&agrave; Mau đ&atilde; mạng t&ocirc;m kh&ocirc; về l&agrave;m qu&agrave; để tặng người th&acirc;n, bạn b&egrave;.</p>\r\n\r\n<p>Những hộ l&agrave;m t&ocirc;m kh&ocirc; l&acirc;u năm ở đ&acirc;y cho biết, để c&oacute; được sản phẩm mang hương vị đặt trưng của rừng, biển, người l&agrave;m t&ocirc;m kh&ocirc; cũng phải c&oacute; b&iacute; quyết ri&ecirc;ng khi luột t&ocirc;m. T&ocirc;m phải được luột trong nước thật s&ocirc;i từ 5-6 ph&uacute;t, rồi mới cho muối v&agrave;o luột th&ecirc;m 4-5 ph&uacute;t nữa sau đ&oacute; mới đem ra phơi nắng hoặc sấy. T&ocirc;m kh&ocirc; c&oacute; m&agrave;u đỏ hồng tự nhi&ecirc;n, thịt t&ocirc;m kh&ocirc; v&agrave; dẻo, c&oacute; vị ngọt đậm đ&agrave;, kh&ocirc;ng c&oacute; m&ugrave;i nồng.</p>\r\n\r\n<p><strong>Tỏi L&yacute; Sơn (tỉnh Quảng Ng&atilde;i)</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/upload/tin-tuc/images/4_117256.jpg\" style=\"height:251px; width:460px\" /></strong></p>\r\n\r\n<p>Tỏi L&yacute; Sơn l&agrave; loại tỏi qu&yacute; ở Việt Nam, n&oacute; được trồng tr&ecirc;n đất đảo L&yacute; Sơn, v&ugrave;ng đất được h&igrave;nh th&agrave;nh do qu&aacute; tr&igrave;nh hoạt động n&uacute;i lửa v&agrave; sự bồi đắp của c&aacute;t biển, đ&aacute; san h&ocirc; biển tạo n&ecirc;n, với sự đặc biệt về thổ nhưỡng v&agrave; kinh nghiệm truyền thống bao đời từ khi khai sinh v&ugrave;ng đất đảo đ&atilde; l&agrave;m cho tỏi L&yacute; Sơn c&oacute; hương vị ri&ecirc;ng v&agrave; đặc biệt. Nguồn: Internet.</p>\r\n\r\n<p>L&yacute; Sơn l&agrave; v&ugrave;ng trồng tỏi nổi tiếng của tỉnh Quảng Ng&atilde;i được mệnh danh l&agrave; &ldquo;vương quốc&rdquo; tỏi. C&ugrave;ng với kh&iacute; hậu, th&igrave; đất ba-zan v&agrave; c&aacute;t biển đ&atilde; g&oacute;p phần tạo n&ecirc;n hương vị độc đ&aacute;o của củ tỏi ở huyện đảo L&yacute; Sơn (Quảng Ng&atilde;i) m&agrave; kh&ocirc;ng nơi n&agrave;o c&oacute; được.</p>\r\n\r\n<p>Từ l&acirc;u tỏi L&yacute; Sơn được lưu th&ocirc;ng rộng r&atilde;i khắp mọi nơi .Tỏi L&yacute; Sơn đ&atilde; v&agrave; được cục đo lường chất lượng kiểm định l&agrave; một loại tỏi độc nhất v&ocirc; nhị với: hương vị thơm ngon, chữa được c&aacute;c bệnh như Hạ huyết &aacute;p, tăng s&uacute;c đề kh&aacute;ng cho cơ thể, chống cảm c&uacute;m&hellip; Những ai d&ugrave;ng rồi mới thấy Tỏi L&yacute; Sơn l&agrave; một sản phẩm kh&ocirc;ng thể thiếu trong bữa an hằng ng&agrave;y.</p>\r\n\r\n<p><strong>Rượu B&agrave;u Đ&aacute; (tỉnh B&igrave;nh Định)</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/upload/tin-tuc/images/5_32821.jpg\" style=\"height:308px; width:460px\" /></strong></p>\r\n\r\n<p>Muốn c&oacute; rượu ngon, người nấu phải tu&acirc;n thủ c&aacute;c y&ecirc;u cầu nghi&ecirc;m ngặt về nguồn nước, gạo, men, dụng cụ nấu cộng với kinh nghiệm gia truyền. Nguồn: Internet.</p>\r\n\r\n<p>T&ecirc;n gọi của rượu l&agrave; do được nấu chủ yếu từ l&agrave;ng C&ugrave; L&acirc;m thuộc x&atilde; Nhơn Lộc, huyện An Nhơn, tỉnh B&igrave;nh Định. B&agrave;u Đ&aacute; l&agrave; t&ecirc;n của một b&agrave;u nước ng&agrave;y xưa cả l&agrave;ng d&ugrave;ng chung, l&agrave; nguồn nước để chưng cất rượu B&agrave;u Đ&aacute;. B&agrave;u nước cổ n&agrave;y ng&agrave;y nay đ&atilde; cạn nước, nguồn nước chủ yếu để ủ men, cất rượu b&acirc;y giờ l&agrave; từ những mạch nước giếng của l&agrave;ng.</p>\r\n\r\n<p>Rượu B&agrave;u Đ&aacute; đ&atilde; từng được nh&agrave; thơ Nguyễn Duy phong l&agrave; &quot;Đệ nhất tửu&quot; sau khi &ocirc;ng v&agrave;o tận nơi để thưởng thức. Rượu B&agrave;u Đ&aacute; l&agrave; sự cộng hưởng của nhiều nh&acirc;n tố. Đầu ti&ecirc;n đ&oacute; l&agrave; sự thừa hưởng d&ograve;ng nước ngọt ng&agrave;o của ngọn nguồn s&ocirc;ng K&ocirc;n, được ủ lạnh, lọc trong từ những hộc đ&aacute; ngầm. Tiếp đến l&agrave; sự kh&eacute;o l&eacute;o, cần mẫn của con người v&ugrave;ng &ldquo;đất v&otilde; trời văn&rdquo;. Sự cộng hưởng giữa thi&ecirc;n nhi&ecirc;n v&agrave; t&agrave;i hoa con người đ&atilde; tạo n&ecirc;n thứ rượu đậm đ&agrave;.</p>\r\n\r\n<p><strong>Kẹo M&egrave; xửng (tỉnh Thừa Thi&ecirc;n - Huế)</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong><img alt=\"\" src=\"/upload/tin-tuc/images/6_32463.jpg\" style=\"height:333px; width:442px\" /></strong></p>\r\n\r\n<p>M&egrave; xửng l&agrave; sản phẩm truyền thống của cố đ&ocirc; Huế. Bản chất thanh lịch, cần c&ugrave;, kh&eacute;o l&eacute;o của người d&acirc;n Kinh kỳ đ&atilde; tạo n&ecirc;n loại kẹo nức tiếng thi&ecirc;n hạ n&agrave;y bằng những nguy&ecirc;n liệu quen thuộc của đất c&aacute;t miền Trung. Nguồn: Internet</p>\r\n\r\n<p>Kẹo m&egrave; xửng c&oacute; hai nguy&ecirc;n liệu ch&iacute;nh tạo th&agrave;nh l&agrave; m&egrave; (vừng) v&agrave; xửng (c&aacute;ch ho&aacute;n đường th&agrave;nh chất dẻo c&ocirc; đặc). M&egrave; xửng c&oacute; độ dẻo đến mức c&oacute; thể cuộn tr&ograve;n hoặc bẻ gập thanh kẹo, nhưng bỏ tay ra n&oacute; lại trở về tư thế ban đầu. M&egrave; xửng gi&ograve;n, th&agrave;nh phần bột đậu nhiều hơn, đường &iacute;t hơn, được bọc ngo&agrave;i một lớp b&aacute;nh đa nướng, ăn gi&ograve;n tan trong miệng. M&egrave; xửng gương, giơ l&ecirc;n ngắm thấy trong suốt như gương. M&egrave; xửng đen gồm to&agrave;n vừng đen b&ugrave;i v&agrave; bổ&hellip;</p>\r\n\r\n<p>Đ&acirc;y l&agrave; m&oacute;n ăn quen thuộc, lại c&oacute; sức quyến rũ bởi c&aacute;i vị ngọt b&eacute;o của đường, gi&ograve;n của đậu phụng, thơm b&ugrave;i của m&egrave;. N&oacute; c&ograve;n c&oacute; một người bạn đi k&egrave;m kh&ocirc;ng thể t&aacute;ch rời đ&oacute; l&agrave; tr&agrave; sen - thứ tr&agrave; được ướp c&ocirc;ng phu từ những đ&oacute;a sen c&ograve;n đọng hơi sương.</p>\r\n\r\n<p style=\"text-align:right\">Nh&agrave; b&aacute;o: V&otilde; Văn Huấn</p>\r\n', 1, b'1', '2017-08-14 22:30:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name`, `parent_id`) VALUES
(1, 'Hành - Tỏi', 0),
(2, 'Hải sản', 0),
(3, 'Sản phẩm khác', 0),
(4, 'Tỏi', 1),
(5, 'Hành', 1),
(6, 'Cá', 2),
(7, 'Mực', 2),
(8, 'Hải Sâm', 2),
(9, 'Tôm', 2),
(10, 'Sản phẩm khác', 3),
(31, 'Ốc Lý Sơn', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` smallint(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `decription` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `decription`) VALUES
(4, 'Khuyến mãi', 'Thông tin khuyến mãi'),
(5, 'Thực phẩm', 'tin tức về an toàn thực phẩm, ẩm thực liên quan đến hành tỏi, hải sản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` smallint(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `content`) VALUES
(3, 'Huanit', 'huanoaz@gmail.com', 'Hướng dẫn tạo checksum\r\nSắp xếp mảng tham số giao tiếp giữa 2 bên theo tên trường tham số (key sort)\r\nTạo dữ liệu chuẩn bị mã hóa bằng cách ghép xâu (viết liền không có dấu ngăn cách) các giá trị tham số theo thứ tự đã sắp xếp ở trên (giatri1 – giatri2 - …)\r\nTạo checksum bằng cách sử dụng phương pháp mã hóa HMAC với giải thuật SHA1 trên dữ liệu được tạo ra ở bước trên và khóa bí mật giữa 2 bên'),
(4, 'thieu', 'luongvanthieuvhit@gmail.com', 'mua hàng về quảng ngãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `id_transaction`, `id_product`, `qty`, `amount`, `data`, `status`) VALUES
(1, 1, 31, 4, '1600000.0000', '', 0),
(2, 2, 42, 3, '180000.0000', '', 0),
(3, 3, 30, 5, '1100000.0000', '', 0),
(4, 3, 29, 10, '12000000.0000', '', 0),
(5, 4, 30, 1, '220000.0000', '', 0),
(6, 5, 45, 1, '225000.0000', '', 0),
(7, 13, 30, 5, '1100000.0000', '', 0),
(8, 14, 33, 5, '900000.0000', '', 0),
(9, 14, 29, 1, '1200000.0000', '', 0),
(10, 15, 44, 2, '500000.0000', '', 0),
(11, 16, 29, 10, '12000000.0000', '', 0),
(12, 17, 33, 1, '180000.0000', '', 0),
(13, 18, 29, 1, '1200000.0000', '', 0),
(14, 19, 29, 1, '1200000.0000', '', 0),
(15, 20, 30, 1, '220000.0000', '', 0),
(16, 20, 33, 1, '180000.0000', '', 0),
(17, 21, 45, 1, '225000.0000', '', 0),
(18, 22, 33, 1, '180000.0000', '', 0),
(19, 23, 29, 1, '1200000.0000', '', 0),
(20, 24, 43, 1, '60000.0000', '', 0),
(21, 25, 43, 1, '60000.0000', '', 0),
(22, 26, 30, 1, '220000.0000', '', 0),
(23, 26, 31, 1, '400000.0000', '', 0),
(24, 27, 43, 1, '60000.0000', '', 0),
(25, 28, 29, 1, '1200000.0000', '', 0),
(26, 29, 43, 1, '60000.0000', '', 0),
(27, 30, 43, 1, '60000.0000', '', 0),
(28, 31, 30, 1, '220000.0000', '', 0),
(29, 32, 29, 1, '1200000.0000', '', 0),
(30, 33, 29, 1, '1200000.0000', '', 0),
(31, 34, 43, 2, '120000.0000', '', 0),
(32, 35, 33, 2, '360000.0000', '', 0),
(33, 35, 29, 1, '1200000.0000', '', 0),
(34, 36, 29, 1, '1200000.0000', '', 0),
(35, 37, 30, 1, '220000.0000', '', 0),
(71, 38, 43, 1, '60000.0000', '', 0),
(72, 39, 30, 1, '220000.0000', '', 0),
(73, 40, 33, 1, '180000.0000', '', 0),
(74, 41, 43, 1, '60000.0000', '', 0),
(75, 42, 42, 1, '60000.0000', '', 0),
(76, 42, 43, 1, '60000.0000', '', 0),
(77, 42, 29, 1, '1200000.0000', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `id_product` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_catalog` int(255) NOT NULL,
  `name_catalog` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `view` int(11) NOT NULL,
  `warranty` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `weigh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `gifts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_catalog`, `name_catalog`, `name`, `price`, `content`, `discount`, `image_link`, `image_list`, `created`, `view`, `warranty`, `weigh`, `total`, `buyed`, `gifts`, `meta_key`, `site_title`, `meta_desc`) VALUES
(29, 4, 'Tỏi', 'Tỏi cô đơn', '1200000.0000', '<div>\r\n	&lt;p&gt;</div>\r\n<div>\r\n	&lt;canvas :netbeans_generated=&quot;true&quot; height=&quot;200&quot; id=&quot;netbeans_glasspane&quot; style=&quot;position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;&quot; width=&quot;729&quot;&gt; &lt;/canvas&gt;&lt;/p&gt;</div>\r\n<div>\r\n	&lt;p&gt;</div>\r\n<div>\r\n	&amp;nbsp;&lt;/p&gt;</div>\r\n<div>\r\n	&lt;p&gt;</div>\r\n<div>\r\n	&amp;nbsp;&lt;/p&gt;</div>\r\n<div>\r\n	&lt;p&gt;</div>\r\n<div>\r\n	&lt;canvas :netbeans_generated=&quot;true&quot; id=&quot;netbeans_glasspane&quot; style=&quot;position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;&quot;&gt;&lt;/canvas&gt;&lt;/p&gt;</div>\r\n<div>\r\n	&nbsp;</div>\r\n', 0, 'toicodon.jpg', '[]', '2017-07-26', 4, '', '1 KG', 0, 7, '', 'Tỏi cô đơn; toi co don', 'Tỏi cô đơn', 'tỏi lý sơn'),
(30, 4, 'Tỏi', 'Tỏi đen', '220000.0000', '<p>\r\n	<span style=\"color: rgb(51, 51, 51); font-family: MyriadPro-Regular; font-size: 16px; text-align: justify;\">Tỏi đen được tạo ra lần đầu ti&ecirc;n bởi c&aacute;c nh&agrave; khoa học Nhật Bản v&agrave;o năm 2005, với mục đ&iacute;ch ban đầu l&agrave; khắc phục c&aacute;c nhược điểm của tỏi tươi: G&acirc;y ra m&ugrave;i kh&oacute; chịu khi ăn, g&acirc;y k&iacute;ch ứng dạ d&agrave;y v&agrave; l&agrave;m mờ mắt, đặc biệt c&aacute;c hoạt chất của tỏi&nbsp; thường bị ph&aacute; hủy trong qu&aacute; tr&igrave;nh chế biến hoặc b&agrave;o chế c&aacute;c sản phẩm bổ sung hoặc l&agrave;m thuốc. Tuy nhi&ecirc;n, Sản phẩm mới sau qu&aacute; tr&igrave;nh l&ecirc;n men tự nhi&ecirc;n đ&atilde; vượt ngo&agrave;i mong đợi. Kh&ocirc;ng những l&agrave;m mất đi m&ugrave;i kh&oacute; chịu v&agrave; vị hăng cay của tỏi tươi, tỏi đen l&ecirc;n men c&ograve;n được chứng minh c&oacute; chứa 18 loại axit amin cần thiết cho cơ thể con người, v&agrave; nồng độ c&aacute;c chất chống oxy h&oacute;a gấp nhiều lần so với tỏi trắng. Với những t&iacute;nh chất đặc biệt tỏi đen ng&agrave;y c&agrave;ng được biết nhiều ở khắp c&aacute;c nước tr&ecirc;n thế giới.</span></p>\r\n', 0, 'toiden.jpg', '[]', '2017-07-26', 8, '', '125 g', 0, 7, '', 'tỏi đen', 'tỏi đen', 'tỏi đen'),
(31, 4, 'Tỏi', 'Tỏi đen', '420000.0000', '<p>\r\n	<span style=\"color:#0000ff;\"><span style=\"font-family: MyriadPro-Regular; font-size: 16px; text-align: justify;\"><span style=\"font-family:tahoma,geneva,sans-serif;\"><span style=\"font-size:20px;\"><em><strong>Tỏi đen</strong></em></span></span></span></span><span style=\"color: rgb(51, 51, 51); font-family: MyriadPro-Regular; font-size: 16px; text-align: justify;\"> được tạo ra lần đầu ti&ecirc;n bởi c&aacute;c nh&agrave; khoa học Nhật Bản v&agrave;o năm 2005, với mục đ&iacute;ch ban đầu l&agrave; khắc phục c&aacute;c nhược điểm của tỏi tươi: G&acirc;y ra m&ugrave;i kh&oacute; chịu khi ăn, g&acirc;y k&iacute;ch ứng dạ d&agrave;y v&agrave; l&agrave;m mờ mắt, đặc biệt c&aacute;c hoạt chất của tỏi&nbsp; thường bị ph&aacute; hủy trong qu&aacute; tr&igrave;nh chế biến hoặc b&agrave;o chế c&aacute;c sản phẩm bổ sung hoặc l&agrave;m thuốc. Tuy nhi&ecirc;n, Sản phẩm mới sau qu&aacute; tr&igrave;nh l&ecirc;n men tự nhi&ecirc;n đ&atilde; vượt ngo&agrave;i mong đợi. Kh&ocirc;ng những l&agrave;m mất đi m&ugrave;i kh&oacute; chịu v&agrave; vị hăng cay của tỏi tươi, tỏi đen l&ecirc;n men c&ograve;n được chứng minh c&oacute; chứa 18 loại axit amin cần thiết cho cơ thể con người, v&agrave; nồng độ c&aacute;c chất chống oxy h&oacute;a gấp nhiều lần so với tỏi trắng. Với những t&iacute;nh chất đặc biệt tỏi đen ng&agrave;y c&agrave;ng được biết nhiều ở khắp c&aacute;c nước tr&ecirc;n thế giới.</span></p>\r\n', 20000, 'toiden1.jpg', '[]', '2017-07-26', 2, '', '250 g', 0, 0, '', 'tỏi đen', 'tỏi đen', 'tỏi đen'),
(32, 6, 'Cá', 'Cá Dìa', '250000.0000', '<p>\r\n	<span style=\"font-family: sans-serif; font-size: 14px;\"><span style=\"font-size:20px;\"><span style=\"color:#ff0000;\"><strong>C&aacute; d&igrave;a</strong></span></span> b&ocirc;ng l&agrave; nguy&ecirc;n liệu cho những m&oacute;n ăn ngon. hai m&oacute;n quen thuộc l&agrave; canh chua v&agrave; nướng. M&oacute;n nướng c&oacute; c&aacute;i tiện &iacute;ch hơn v&igrave; từ nướng bằng muối ớt bụi bặm nơi g&agrave;nh biển hoang sơ thiếu thốn đến nướng trong nh&agrave; h&agrave;ng được trang sức đủ đầy gia vị đều hấp dẫn. Chọn con c&aacute; tươi, l&agrave;m sạch, bỏ mang, để nguy&ecirc;n con, nếu c&aacute; to qu&aacute; cắt l&agrave;m đ&ocirc;i. C&aacute; d&igrave;a tanh n&ecirc;n trước hết cần phi h&agrave;nh, vừa để khử m&ugrave;i tanh của c&aacute; vừa gi&uacute;p con c&aacute; ch&iacute;n, săn chắc thịt. Nồi canh chua c&aacute; d&igrave;a b&ocirc;ng m&uacute;c ra c&oacute; lấp lo&aacute;ng m&agrave;u của v&aacute;ng mỡ c&aacute;, c&oacute; m&agrave;u đỏ của ớt, m&agrave;u xanh v&agrave;ng của c&aacute;c loại rau v&agrave; m&ugrave;i thơm của từng thớ thịt c&aacute; tươi nguy&ecirc;n gi&agrave;u hương vị biển.</span></p>\r\n', 0, 'cadia.jpg', '[]', '2017-07-26', 0, '', '1 kg', 0, 0, '', 'cá dìa', 'cá dìa', 'cá dìa'),
(33, 6, 'Cá', 'Chả cá Lý Sơn - loại chín', '180000.0000', '<p>\r\n	<span font-size:=\"\" sans=\"\" source=\"\" style=\"color: rgb(51, 51, 51); font-family: \">Chưa c&oacute; m&ocirc; tả cho sản phẩm n&agrave;y</span></p>\r\n', 0, 'chaca1.jpg', '[\"chaca2.jpg\"]', '2017-07-26', 5, '', '1 kg', 0, 5, '', 'Chả cá Lý Sơn', 'Chả cá Lý Sơn', 'Chả cá Lý Sơn'),
(34, 6, 'Cá', 'Cá mú đỏ', '295000.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\"><span style=\"font-size:18px;\"><span style=\"color:#ff8c00;\"><strong>C&aacute; m&uacute; đỏ</strong></span></span>, t&ecirc;n khoa học <strong>Cephalopholis miniata</strong>, c&ograve;n gọi l&agrave; c&aacute; m&uacute; chấm đỏ, c&aacute; m&uacute; sao, l&agrave; một lo&agrave;i c&aacute; trong họ Serranidae. Ch&uacute;ng thường được t&igrave;m thấy ở v&ugrave;ng biển Durban, Nam Phi, Hồng Hải, v&agrave; Line Islands. Ch&uacute;ng c&oacute; thể đạt chiều d&agrave;i đến 50 xentim&eacute;t.</span></p>\r\n', 0, 'camudo.jpg', '[]', '2017-07-26', 2, '', '1 kg', 0, 0, '', 'Cá mú đỏ', 'Cá mú đỏ', 'Cá mú đỏ'),
(35, 6, 'Cá', 'Cá ngừ', '150000.0000', '<p>\r\n	<canvas :netbeans_generated=\"true\" height=\"200\" id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"729\"> </canvas></p>\r\n<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\"><span style=\"color:#ffa500;\"><span style=\"font-size:16px;\"><strong>C&aacute; ngừ</strong></span></span> đại dương l&agrave; loại c&aacute; lớn thuộc họ C&aacute; bạc m&aacute;, chủ yếu thuộc chi Thunnus, sinh sống ở v&ugrave;ng biển ấm, c&aacute;ch bờ độ 185 km trở ra. Ở Việt Nam, C&aacute; ngừ đại dương l&agrave; t&ecirc;n địa phương để chỉ loại c&aacute; ngừ mắt to v&agrave; c&aacute; ngừ v&acirc;y v&agrave;ng.</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<canvas :netbeans_generated=\"true\" id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\"></canvas></p>\r\n', 0, 'cangu.jpg', '[]', '2017-07-26', 2, '', '1 kg', 0, 0, '', 'Cá ngừ', 'Cá ngừ', 'Cá ngừ'),
(36, 7, 'Mực', 'Mực khô', '950000.0000', '<p>\r\n	Mực kh&ocirc;</p>\r\n', 0, 'muckho.jpg', '[]', '2017-07-26', 2, '', '6-8 c/kg', 0, 0, '', 'Mực khô', 'Mực khô', 'Mực khô'),
(37, 7, 'Mực', 'Mực Lá - loại 1', '315000.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\"><span style=\"color:#ff0000;\"><strong><span style=\"font-size:22px;\">Mực l&aacute;</span></strong></span> l&agrave; một lo&agrave;i mực ống quan trọng về thương mại. Giống như c&aacute;c th&agrave;nh vi&ecirc;n kh&aacute;c của chi Sepioteuthis, mực l&agrave; dễ d&agrave;ng để ph&acirc;n biệt với mực kh&aacute;c ở chỗ ch&uacute;ng c&oacute; v&acirc;y d&agrave;y h&igrave;nh bầu dục khỏe mở rộng xung quanh gần như to&agrave;n bộ lớp &aacute;o.</span></p>\r\n', 0, 'mucla.jpg', '[]', '2017-07-26', 0, '', '>600g/con', 0, 0, '', 'Mực lá', 'Mực lá', 'Mực lá'),
(38, 9, 'Tôm', 'Tôm hùm', '1450000.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\"><span style=\"color:#ff0000;\"><span style=\"font-size:16px;\"><strong>T&ocirc;m h&ugrave;m</strong></span></span>, t&ecirc;n khoa học Panulirus ornatus l&agrave; một lo&agrave;i t&ocirc;m rồng ăn được với 11 giai đoạn ấu tr&ugrave;ng kh&ocirc;ng thể nu&ocirc;i nhốt th&agrave;nh c&ocirc;ng được.</span></p>\r\n', 0, 'tomhum.jpg', '[]', '2017-07-26', 1, '', '0.5-0.8kg', 0, 0, '', 'tôm hùm', 'tôm hùm', 'tôm hùm'),
(39, 9, 'Tôm', 'Tôm hùm', '0.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\">T&ocirc;m h&ugrave;m b&ocirc;ng, t&ecirc;n khoa học Panulirus ornatus l&agrave; một lo&agrave;i t&ocirc;m rồng ăn được với 11 giai đoạn ấu tr&ugrave;ng kh&ocirc;ng thể nu&ocirc;i nhốt th&agrave;nh c&ocirc;ng được.</span></p>\r\n', 0, 'tomhum1.jpg', '[]', '2017-07-26', 0, '', '>1kg', 0, 0, '', 'Tôm hùm', 'Tôm hùm', 'Tôm hùm'),
(40, 8, 'Hải Sâm', 'Rượu Hải Sâm', '0.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\"><strong>Hải s&acirc;m</strong> t&ecirc;n gọi d&acirc;n gian l&agrave; đỉa biển hay c&ograve;n gọi l&agrave; con rum l&agrave; t&ecirc;n gọi chung của một nh&oacute;m động vật biển thuộc lớp Holothuroidea với th&acirc;n h&igrave;nh d&agrave;i v&agrave; da c&oacute; l&ocirc;ng, c&oacute; xương trong nằm ngay dưới da, sống trong l&ograve;ng biển tr&ecirc;n khắp thế giới.</span></p>\r\n', 0, 'ruouhaisam1.jpg', '[]', '2017-07-26', 0, '', '1 kg', 0, 0, '', 'Rượu hải sâm', 'Rượu hải sâm', 'Rượu hải sâm'),
(41, 8, 'Hải Sâm', 'Hải Sâm khô', '0.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\">Hải s&acirc;m t&ecirc;n gọi d&acirc;n gian l&agrave; đỉa biển hay c&ograve;n gọi l&agrave; con rum l&agrave; t&ecirc;n gọi chung của một nh&oacute;m động vật biển thuộc lớp Holothuroidea với th&acirc;n h&igrave;nh d&agrave;i v&agrave; da c&oacute; l&ocirc;ng, c&oacute; xương trong nằm ngay dưới da, sống trong l&ograve;ng biển tr&ecirc;n khắp thế giới.</span></p>\r\n<p>\r\n	<canvas :netbeans_generated=\"true\" height=\"200\" id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"729\"></canvas></p>\r\n', 0, 'haisamkho.jpg', '[]', '2017-07-26', 0, '', '1 kg', 0, 0, '', 'Hải Sâm Khô', 'Hải Sâm Khô', 'Hải Sâm Khô'),
(42, 5, 'Hành', 'Hành khô', '60000.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\">Phần lớn c&acirc;y thuộc chi H&agrave;nh đều được gọi chung l&agrave; h&agrave;nh t&acirc;y. Tuy nhi&ecirc;n, trong thực tế th&igrave; n&oacute;i chung từ h&agrave;nh t&acirc;y được d&ugrave;ng để chỉ một lo&agrave;i c&acirc;y c&oacute; danh ph&aacute;p hai phần l&agrave; Allium cepa</span></p>\r\n', 0, 'hanhkho1.jpg', '[]', '2017-07-26', 3, '', '1 kg', 0, 1, '', 'Hành tỏi', 'Hành tỏi', 'Hành tỏi'),
(43, 31, 'Ốc Lý Sơn', 'Ốc xà cừ - loại ốc vỏ', '60000.0000', '<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\"><strong>Ốc x&agrave; cừ</strong> l&agrave; một họ ốc biển động vật ch&acirc;n bụng, l&agrave; lo&agrave;i qu&yacute; hiếm, được d&ugrave;ng trong kĩ nghệ khảm trai v&agrave; l&agrave; lo&agrave;i c&oacute; gi&aacute; trị kinh tế nhất trong c&aacute;c loại x&agrave; cừ.</span></p>\r\n', 0, 'ruotocxacu.jpg', '[]', '2017-07-26', 12, '', '1 kg', 0, 9, '', 'Ốc xà cừ', 'Ốc xà cừ', 'Ốc xà cừ'),
(44, 31, 'Ốc Lý Sơn', 'Ốc xà cừ - loại ruột', '280000.0000', '<p>\r\n	<canvas :netbeans_generated=\"true\" height=\"200\" id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\" width=\"729\"> </canvas></p>\r\n<p>\r\n	<span style=\"font-family: arial, sans-serif; font-size: 13px;\">Ốc x&agrave; cừ l&agrave; một họ ốc biển động vật ch&acirc;n bụng, l&agrave; lo&agrave;i qu&yacute; hiếm, được d&ugrave;ng trong kĩ nghệ khảm trai v&agrave; l&agrave; lo&agrave;i c&oacute; gi&aacute; trị kinh tế nhất trong c&aacute;c loại x&agrave; cừ.</span></p>\r\n<p>\r\n	<canvas :netbeans_generated=\"true\" id=\"netbeans_glasspane\" style=\"position: fixed; top: 0px; left: 0px; z-index: 50000; pointer-events: none;\"></canvas></p>\r\n', 30000, 'ocxacu1.jpg', '[\"ruotocxacu1.jpg\",\"ruouhaisam2.jpg\",\"ruoutoicodon.jpg\",\"toiden2.jpg\",\"tomhum2.jpg\"]', '2017-07-26', 59, '', '1 kg', 0, 0, '', 'Ốc xà cừ', 'Ốc xà cừ', 'Ốc xà cừ'),
(45, 6, 'Cá', 'Mực Lá - Loại 3', '225000.0000', '<p>\r\n	Demo Sản phẩm.<br />\r\n	Loading....</p>\r\n', 0, 'mucla5.jpg', '[\"ocxacu2.jpg\",\"ruotocxacu2.jpg\",\"ruouhaisam3.jpg\",\"ruoutoicodon1.jpg\"]', '2017-07-28', 22, '', '0.1-0.3kg/con', 0, 1, '', 'Mực Lá', 'Mực Lá', 'Mực Lá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--

CREATE TABLE `support` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sky` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fanpage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `onlinechat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map` text COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `support`
--

INSERT INTO `support` (`id`, `name`, `gmail`, `sky`, `phone`, `facebook`, `fanpage`, `onlinechat`, `address`, `map`, `sort_order`) VALUES
(1, 'Võ Văn Huấn', 'huanoaz@gmail.com', '', '0914785821', 'https://www.facebook.com/', 'https://www.facebook.com/ShipCom/?fref=ts', 'https://www.facebook.com/ShipCom/?fref=ts', 'Thành phố Quảng Ngãi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9644128596274!2d105.79433031455137!3d21.034109885995466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab47a1066d77%3A0xb0ddf745b77cb03d!2zWm96by52biAtIFThuqFvIHdlYnNpdGUgYsOhbiBow6BuZw!5e0!3m2!1svi!2s!4v1501813903771', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payment` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_info` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `security` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `type`, `status`, `id_user`, `name`, `email`, `phone`, `address`, `amount`, `payment`, `payment_info`, `message`, `security`, `created`) VALUES
(1, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 1600000, 'baokim', '', 'hahahah', '', '2017-07-29 00:00:00'),
(3, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 13100000, 'nganluong', '', 'safdf', '', '2017-07-29 00:00:00'),
(4, 0, 0, 0, 'Võ Văn Huan', 'huanoaz@gmail.com', '0978512938', '', 220000, 'offline', '', 'ssss', '', '2017-08-02 00:00:00'),
(5, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0978512938', '', 225000, 'baokim', '', 'y', '', '2017-08-02 00:00:00'),
(6, 0, 0, 0, 'Hua', 'huanoaz@gmail.com', '0914785821', '', 2400000, 'offline', '', '5858', '', '2017-08-02 00:00:00'),
(7, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 2400000, 'offline', '', 'sgsd', '', '2017-08-02 00:00:00'),
(8, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 2400000, 'offline', '', 'sdg', '', '2017-08-02 00:00:00'),
(9, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 2400000, 'offline', '', 'zsddsd', '', '2017-08-02 00:00:00'),
(10, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 2400000, 'offline', '', 'sddf', '', '2017-08-02 00:00:00'),
(11, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 2400000, 'offline', '', 'sdf', '', '2017-08-02 00:00:00'),
(12, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 250000, 'offline', '', 'sdsdf', '', '2017-08-02 00:00:00'),
(13, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 1100000, 'offline', '', 'sdsd', '', '2017-08-02 00:00:00'),
(14, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 2100000, 'offline', '', 'jhhjvj', '', '2017-08-02 00:00:00'),
(15, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 500000, 'offline', '', 'zasf', '', '2017-08-02 00:00:00'),
(16, 0, 1, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 12000000, 'offline', '', 'df', '', '2017-08-02 00:00:00'),
(17, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0978512938', '', 180000, 'offline', '', 'sdf', '', '2017-08-02 00:00:00'),
(18, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0978512938', '', 1200000, 'offline', '', '   sads', '', '2017-08-02 00:00:00'),
(19, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0978512938', '', 1200000, 'offline', '', '  gyugyug  ', '', '2017-08-02 00:00:00'),
(20, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0978512938', '', 400000, 'offline', '', 'sdhguwiejds', '', '2017-08-02 00:00:00'),
(21, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0978512938', '', 225000, 'offline', '', 'ưdư', '', '2017-08-02 00:00:00'),
(22, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 180000, 'offline', '', 'fgrgerter', '', '2017-08-04 00:00:00'),
(23, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 1200000, 'offline', '', 'dgre', '', '2017-08-04 00:00:00'),
(24, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 60000, 'offline', '', 'sdfds', '', '2017-08-04 00:00:00'),
(25, 0, 0, 0, 'fddfgd', 'dfgdfgd@gmail.com', '0914785821', '', 60000, 'offline', '', 'sdgs', '', '2017-08-04 00:00:00'),
(26, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 620000, 'offline', '', 'ãc', '', '2017-08-06 00:00:00'),
(27, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 60000, 'offline', '', 'xfgs', '', '2017-08-06 00:00:00'),
(28, 0, 0, 0, 'Võ Văn Huấn', 'huanoaz@gmail.com', '0914785821', '', 1200000, 'offline', '', 'fdgf', '', '2017-08-06 00:00:00'),
(29, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'offline', 60000, 'fdggf', '', 'fdgdfgdfg', '', '2017-08-06 00:00:00'),
(30, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'offline', 60000, 'dt', '', 'dfgf', '', '2017-08-07 03:39:22'),
(31, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'offline', 220000, 'ccccc', '', 'ccccccc', '', '2017-08-07 03:40:52'),
(32, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'Long Sơn', 1200000, 'offline', '', 's', '', '2017-08-07 03:46:48'),
(33, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'xxxxxxxxxxxxxxxxxxx', 1200000, 'baokim', '', 'cxxxx', '', '2017-08-07 03:47:28'),
(34, 0, 0, 0, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'vo van huan', 120000, 'offline', '', 'agwrs', '', '2017-08-07 21:48:00'),
(35, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'vo van huan', 1560000, 'baokim', '', ',jyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '', '2017-08-13 21:33:06'),
(36, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'ưẻwew', 1200000, 'baokim', '', 'ửwwwwwwwwwwwwwwwwwww', '', '2017-08-13 21:36:28'),
(37, 0, 0, 1, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'sađasad', 220000, 'baokim', '', 'ádsadsa', '', '2017-08-13 21:39:02'),
(38, 0, 0, 0, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'vo van huan', 60000, 'baokim', '', 'zCCCCCCCCCC', '', '2017-08-14 03:47:59'),
(39, 0, 0, 0, 'fddfgd', 'huanoaz@gmail.com', '0914785821', 'vo van huan', 220000, 'baokim', '', 'SFGWBS', '', '2017-08-14 20:04:21'),
(40, 0, 0, 0, 'Ăn tỏi sống chữa ít bệnh', 'huanoaz@gmail.com', '0914785821', 'vo van huan', 180000, 'baokim', '', 'REF', '', '2017-08-14 20:05:06'),
(41, 0, 0, 0, 'Ăn tỏi sống chữa ít bệnh', 'huanoaz@gmail.com', '0914785821', 'vo van huan', 60000, 'baokim', '', 'SSSSSSSSS', '', '2017-08-14 20:07:52'),
(42, 0, 0, 0, 'thieu', 'luongvanthieuvhit@gmail.com', '0914785821', 'hhrh', 1320000, 'offline', '', 'reyetyeyeyyy', '', '2017-08-14 22:40:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `phone`, `address`, `province`, `city`, `created`) VALUES
(1, 'fddfgd', 'huanoaz@gmail.com', '202cb962ac59075b964b07152d234b70', '0914785821', 'bcn', '', '', '0000-00-00 00:00:00'),
(2, 'Võ Văn Huấn', 'huanit1234@gmail.com', '4297f44b13955235245b2497399d7a93', '091478582145', 'Long Sơn', 'Minh Long', 'Quảng Ngãi', '2017-08-07 02:12:06'),
(3, 'Võ Văn Huấn', 'huanit12434@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0914785821', 'Long Sơn', 'Minh Long', 'Gia Lai', '2017-08-07 02:25:20'),
(4, 'Võ Văn Huấn', 'huanit124364@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0914785821', 'Long Sơn', 'Minh Long', 'Bạc Liêu', '2017-08-07 02:27:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`idQC`);

--
-- Chỉ mục cho bảng `articcles`
--
ALTER TABLE `articcles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD KEY `fk_order` (`id_transaction`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_catalog` (`id_catalog`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `idQC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT cho bảng `articcles`
--
ALTER TABLE `articcles`
  MODIFY `id` smallint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` smallint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articcles`
--
ALTER TABLE `articcles`
  ADD CONSTRAINT `articcles_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id_transaction`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id_catalog`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
