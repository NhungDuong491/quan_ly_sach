-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 01:58 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlysach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quanty` int(11) NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id`, `name`, `category_id`, `author`, `description`, `price`, `quanty`, `image`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(26, 'Thế Giới Sẽ Chẳng Có Gì Thay Đổi Kể Cả Khi Bạn Khóc', 4, 'Paak Jonh', 'Khởi đầu và kết thúc của tình yêu không bao giờ rõ ràng. Ta có thể tổ chức kỉ niệm ngày bắt đầu tình yêu, một trăm ngày, một năm, hay một ngàn ngày, nhưng để ghi nhớ được ngày đầu tiên tình yêu chớm nở quả không phải việc dễ. Chuyện chia tay lại càng phức tạp hơn. Có nhiều trường hợp mọi cảm xúc đã hết nhưng vẫn không thể chia tay. Ngược lại cũng có nhiều người chia tay nhau khi vẫn còn yêu thương. Có thể người ta sẽ cảm nhận thấy những dấu hiệu nào đó báo hiệu cho sự bắt đầu hay kết thúc của tình yêu, nhưng giống như một câu trong tiểu thuyết, điều đó sẽ “bắt đầu từ những điều cực kì nhỏ nhặt, hoặc tầm thường”.', 39, 2, '6MFhN_UmeBv_oLnxu_xlZTo_9.jpg', 'the-gioi-se-chang-co-gi-thay-doi-ke-ca-khi-ban-khoc', NULL, '2021-01-04 12:52:28', '2021-07-03 02:49:17'),
(27, 'Thay Đổi Cuộc Sống Với Nhân Số Học', 4, 'Lê Đỗ Quỳnh Hương', 'Có thể xem, Nhân số học là một bộ môn Khám phá Bản thân (Self-Discovery), đọc vị về số. Bộ môn này giúp giải mã những tín hiệu mà cuộc sống đã gửi đến từng cá thể con người trong đời sống, tương tự như Nhân tướng học hay Nhân trắc học… Khi nghiêm túc nghiên cứu sự tồn tại và mối tương quan giữa các con số xuất hiện trong ngày, tháng, năm sinh của mỗi người qua Nhân số học, ta có thể hiểu được khá nhiều về bản thân mình, cũng như mối quan hệ của mình với người khác. Nếu hiểu những \"mật mã\" nằm ẩn dưới những con số, chúng ta có thể kiểm soát cuộc sống của mình', 235, 4, 'o49TC_4kfxS_rKBrv_7s3RV_4.jpg', 'thay-doi-cuoc-song-voi-nhan-so-hoc', NULL, '2021-01-04 12:55:00', '2021-07-03 03:58:25'),
(28, 'Tuổi Trẻ Đáng Giá Bao Nhiêu', 4, 'Nhã Nam', '\"Bạn hối tiếc vì không nắm bắt lấy một cơ hội nào đó, chẳng có ai phải mất ngủ. Bạn trải qua những ngày tháng nhạt nhẽo với công việc bạn căm ghét, người ta chẳng hề bận lòng. Bạn có chết mòn nơi xó tường với những ước mơ dang dở, đó không phải là việc của họ. Suy cho cùng, quyết định là ở bạn. Muốn có điều gì hay không là tùy bạn. Nên hãy làm những điều bạn thích. Hãy đi theo tiếng nói trái tim. Hãy sống theo cách bạn cho là mình nên sống. Vì sau tất cả, chẳng ai quan tâm.\"', 64, 2, '91sW7_ptjnQ_uy8wq_cHWM8_8.jpg', 'tuoi-tre-dang-gia-bao-nhieu', NULL, '2021-01-04 12:57:02', '2021-07-03 03:58:25'),
(29, 'Muôn Kiếp Nhân Sinh', 17, 'First News', 'Đặc biệt là kiến thức về sự phát triển của Ai Cập mấy nghìn năm về trước. Cuốn sách như tác giả nói là câu chuyện có thật kể về việc bạn của ông đã trải qua một sự kiện lạ lùng đó là nhớ lại và được trải nghiệm các kiếp sống trước đây của mình. Mình không chắc câu chuyện này có thật hay không nhưng mình rất nể cách dẫn dắt của tác giả. Mặc dù là sách về tôn giáo, tâm linh nhưng tác giả đã dùng từ ngữ rất dễ hiểu.', 100, 3, 'SLAC6_qtKxz_WMJok_GKK5Y_14.jpg', 'muon-kiep-nhan-sinh', NULL, '2021-01-04 12:58:58', '2021-06-10 14:16:12'),
(30, 'Con Chim Xanh Biếc Bay Về', 19, 'Nguyễn Nhật Ánh', 'Không giống như những tác phẩm trước đây lấy bối cảnh vùng quê miền Trung đầy ắp những hoài niệm tuổi thơ dung dị, trong trẻo với các nhân vật ở độ tuổi dậy thì, trong quyển sách mới lần này nhà văn Nguyễn Nhật Ánh lấy bối cảnh chính là Sài Gòn – Thành phố Hồ Chí Minh nơi tác giả sinh sống (như là một sự đền đáp ân tình với mảnh đất miền Nam). Các nhân vật chính trong truyện cũng “lớn” hơn, với những câu chuyện mưu sinh lập nghiệp lắm gian nan thử thách của các sinh viên trẻ đầy hoài bão.', 130, 21, 'cW3ha_IGFBz_zmbwu_8Grgi_12.jpg', 'con-chim-xanh-biec-bay-ve', NULL, '2021-01-04 13:01:15', '2021-06-10 14:16:12'),
(31, 'Con Chim Xanh Biếc Bay Về', 19, 'Nguyễn Nhật Ánh', 'Như một cuốn phim “trinh thám tình yêu”, Con chim xanh biếc bay về dẫn bạn đi hết từ bất ngờ này đến tò mò suy đoán khác, để kết thúc bằng một nỗi hân hoan vô bờ sau bao phen hồi hộp nghi kỵ đến khó thở.  Bạn sẽ theo phe sinh viên-nhân viên với những câu thơ dịu dàng và đáo để, hay phe ông chủ với những kỹ năng kinh doanh khởi nghiệp? Và hãy đoán thử, điều gì khiến bạn có thể cảm động đến rưng rưng trong cuộc sống giữa Sài Gòn bộn bề?', 239, 13, 'VmjAm_KKvcB_z4HrV_BtFLu_2.jpg', 'con-chim-xanh-biec-bay-ve', NULL, '2021-01-04 13:02:16', '2021-01-05 00:18:08'),
(32, 'Hai Số Phận', 16, 'Huy Hoàng', '“Hai số phận” (Kane & Abel) là câu chuyện về hai người đàn ông đi tìm vinh quang. William Kane là con một triệu phú nổi tiếng trên đất Mỹ, lớn lên trong nhung lụa của thế giới thượng lưu. Wladek Koskiewicz là đứa trẻ không rõ xuất thân, được gia đình người bẫy thú nhặt về nuôi. Một người được ấn định để trở thành chủ ngân hàng khi lớn lên, người kia nhập cư vào Mỹ cùng đoàn người nghèo khổ.', 105, 9, '6yoHs_TE4ch_W0yI0_98QY3_15.jpg', 'hai-so-phan', NULL, '2021-01-04 13:03:35', '2021-07-03 03:58:25'),
(33, 'Mindmap English Grammar', 16, 'MCBOOKS', 'ơ đồ tư duy được mệnh danh là \" CÔNG CỤ VẠN NĂNG CHO BỘ NÃO\" - một phương pháp trình bày ý tưởng, kiến thức bằng những từ khóa chính, hình ảnh và màu sắc, giúp não bộ phát huy tối đa khả năng ghi nhớ. Phương pháp này hiện nay được hơn 250 triệu người trên thế giới sử dụng, đã và đang đem lại những hiệu quả thực sự nhất là ngữ pháp tiếng Anh', 159, 10, 'V108o_JbSNI_Ldtv1_vNGj5_6.jpg', 'mindmap-english-grammar', NULL, '2021-01-04 13:05:04', '2021-01-04 13:05:04'),
(34, 'Vui Vẻ Không Quạu Nha', 6, 'Tản Văn', 'Cuộc đời ngày ngày nói yêu mình.  Xong cuộc đời lại đủ thứ phức tạp và bất công với mình.  Vậy là cuộc đời ghét mình rồi!  Thôi nào!  Thả lỏng và tận hưởng sự vui vẻ đi. Vì chẳng phải cuộc đời đang ghét bạn đâu, mà chính bạn bạn đang loay hoay với những mệt nhọc ở trên đời. Ví dụ như nay đã là deadline mà bỗng bị rớt mạng, sáng nay đi làm quên đem theo ví, hay đồng nghiệp ở công ty nói xấu mình,', 414, 15, 'b9rel_1bThE_jLAKQ_vyvee_10.jpg', 'vui-ve-khong-quau-nha', NULL, '2021-01-04 13:06:10', '2021-01-04 13:06:10'),
(35, 'Biên Niên Cô Đơn', 18, 'The Writer', '“Mất bao lâu để quên một người?!  Sau khi chia tay người cũ, mình mất hết một năm loay hoay trong mớ bòng bong cảm xúc trong lòng. Lúc đó không buồn, cũng chẳng quá đau khổ dằn vặt gì, vẫn cứ sống và làm việc bình thường, thậm chí làm việc còn nhiều hơn trước và thành công hơn trước.  Nhưng vết xước trong lòng chưa bao giờ lành lặn.', 49, 20, 'tH3Rn_yQwhG_C3YyS_Gq7GM_7.jpg', 'bien-nien-co-don', NULL, '2021-01-04 13:07:18', '2021-01-04 13:07:18'),
(36, 'Tự Học 2000 Từ Vựng Tiếng Anh', 5, 'MCBOOKS', 'Nghe nói đọc viết là 4 kĩ năng quan trọng để có thể học và sử dụng tốt tiếng Anh - ngôn ngữ toàn cầu. Tuy nhiên không phải ai cũng có thể thành thạo những kĩ năng này. Nghe hiểu là một trong những kĩ năng đòi hỏi sự tập trung và rèn luyện của người học.  Luyện nghe từ vựng tiếng Anh theo chủ điểm sẽ cung cấp những bài tập với trình độ nâng cao, là tài liệu bổ ích cho những ai muốn nâng cao khả năng nghe hiểu thông qua học từ vựng.', 39, 17, 'EXd34_se5jN_2nVfU_gDgSm_11.jpg', 'tu-hoc-2000-tu-vung-tieng-anh', NULL, '2021-01-04 13:08:29', '2021-01-04 13:08:29'),
(37, 'Healthy & Balanced', 7, 'Lê Anh Tuấn', 'Để cảm thán cuộc sống suôn sẻ hay bế tắc, chúng ta có một câu cửa miệng “ăn ở cả”. Có thể nói, “ăn ở” chính là những THÓI QUEN SINH HOẠT làm nên mỗi giờ, mỗi ngày, mỗi năm và cả một giai đoạn trong đời người.  Ai cũng biết một cuộc sống có ý nghĩa bắt đầu từ những thói quen lành mạnh. Vậy tại sao vẫn có nhiều người “sống mòn”, thức khuya dậy trễ, ăn uống không kiểm soát, không có kế hoạch làm việc hiệu quả?', 64, 23, 'wmtZ0_6AtsI_Screenshot 2021-01-05 140308.png', 'healthy-balanced', NULL, '2021-01-04 23:56:56', '2021-07-03 03:58:25'),
(38, 'Sức Mạnh Của Ngôn Từ', 7, 'Shin Dohy', 'Kỹ năng giao tiếp là một trong những kỹ năng sống vô cùng quan trọng, tuy nhiên đôi khi chúng ta lại không mấy để ý tới chúng. Để đạt được điều bạn mong muốn, ngôn từ chính là chiếc chìa khóa đầu tiên. Sức mạnh của ngôn từ có thể đưa bạn từ sự vui sướng tột độ đến tâm trạng tụt dốc, buồn đau,chán nản. Cuộc sống của bạn sẽ trở nên tốt đẹp và hạnh phúc hơn nếu thấu hiểu được ẩn ý và cách sử dụng khéo léo và linh hoạt ngôn từ trong giao tiếp.', 57, 20, 'MurPS_XaZuE_ftpuO_nBsay_Screenshot 2021-01-05 135519.png', 'suc-manh-cua-ngon-tu', NULL, '2021-01-05 00:06:17', '2021-01-05 00:06:17'),
(39, 'Chó sủa nhầm cây', 19, 'Ecoblader', 'CHÓ SỦA NHẦM CÂY - BARKING UP THE WRONG TREE - là quyển sách gây tiếng vang, liên tục nằm trong danh sách bestseller Amazon của tác giả kiêm chủ trang blog Barking up the wrong tree - Eric Barker. Xuyên suốt nội dung sách, Eric sẽ cùng chúng ta lý giải một cách đầy hóm hỉnh nhưng không kém phần chặt chẽ những quan niệm khác nhau về thành công từ trước đến nay. Và ở cuối con đường đó, mỗi người chúng ta sẽ tự tìm thấy ngưỡng cửa thành công cho riêng mình.', 109, 32, 'PgECj_Kk1ok_Screenshot 2021-01-05 140752.png', 'cho-sua-nham-cay', NULL, '2021-01-05 00:08:22', '2021-01-05 00:08:22'),
(40, 'Sự Thật Về Ung Thư', 8, 'Nguyệt Minh', 'Ung thư là một bệnh mãn tính xảy ra khi các tế bào khỏe mạnh tiếp xúc với chất gây ung thư hoặc các chất độc khác và sau đó trở thành ác tính. Sự hình thành của các tế bào ung thư là một sự xuất hiện bình thường và hệ thống miễn dịch được thiết kế một cách tự nhiên để tránh sự phát triển của các tế bào bị đột biến này trước khi chúng gây ra bệnh hoặc hình thành khối u. Nhưng bản thân hệ thống miễn dịch có thể bị tổn hại, có thể là do tiếp xúc quá nhiều với độc tố môi trường hoặc thiếu chất dinh dưỡng thích hợp', 169, 17, '7Xu3Z_nAs81_Screenshot 2021-01-05 141327.png', 'su-that-ve-ung-thu', NULL, '2021-01-05 00:14:40', '2021-01-05 00:14:40'),
(41, 'Sống Sạch Để Xanh Ăn Lành Để Khỏe', 9, 'Anh Ngô', 'Thức ăn có thể độc hại hoặc có tính chữa lành, tất cả phụ thuộc vào việc bạn quyết định ăn gì. Khi bạn đưa thực phẩm chế biến sẵn vào cơ thể, bạn sẽ cảm thấy uể oải và căng chướng, khiến cơ thể mất đi khả năng tự chữa lành. Khi chuyển sang dùng thức ăn sạch sẽ, tự nhiên và giàu dinh dưỡng, bạn sẽ cảm thấy dễ chịu, đó là quá trình cơ thể bạn phục hồi năng lượng và tăng đề kháng. Đây là kiến thức cơ bản về dinh dưỡng, tuy nhiên không phải ai cũng hiểu rõ và áp dụng nó vào sinh hoạt hằng ngày.', 69, 12, 'OvAkk_mqZdD_Screenshot 2021-01-05 141630.png', 'song-sach-de-xanh-an-lanh-de-khoe', NULL, '2021-01-05 00:17:18', '2021-01-05 00:17:18'),
(42, 'Tớ Muốn Ăn Tụy Của Cậu', 20, 'Phong Tập', '“Tôi không biết về ngày mai của tôi - người vẫn còn thời gian, nhưng tôi đã nghĩ ngày mai của cô ấy - người chẳng còn mấy thời gian đã được hẹn trước.  Cái lô-gíc xuẩn ngốc gì thế này.  Tôi đã nghĩ thế giới này sẽ ưu ái trước sinh mệnh của một cô gái mà những ngày sống chẳng còn là bao.  Đương nhiên, làm gì có chuyện như vậy. Đã không như vậy.  Thế giới không phân biệt một ai.  Nó không nương bàn tay tấn công bình đẳng ấy với bất kỳ ai, kể cả tôi - người có một thân thể khỏe mạnh, hay cô ấy - người sắp ra đi vì căn bệnh nan y.”', 70, 15, '07Gzq_uPRDn_Screenshot 2021-01-05 141936.png', 'to-muon-an-tuy-cua-cau', NULL, '2021-01-05 00:19:59', '2021-01-05 00:19:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Sách marketing', 'sach-marketing', NULL, NULL, NULL),
(5, 'Sách kỹ năng', 'sach-ky-nang', NULL, NULL, NULL),
(6, 'Sách thiếu nhi', 'sach-thieu-nhi', NULL, NULL, NULL),
(7, 'Sách tâm lý', 'sach-tam-ly', NULL, NULL, NULL),
(8, 'Sách y học', 'sach-y-hoc', NULL, NULL, NULL),
(9, 'Sách gia đình', 'sach-gia-dinh', NULL, NULL, NULL),
(15, 'Truyện tranh', 'truyen-tranh', NULL, '2021-01-04 11:35:40', '2021-01-04 11:35:40'),
(16, 'Truyện trinh thám', 'truyen-trinh-tham', NULL, '2021-01-04 11:36:01', '2021-01-04 11:36:01'),
(17, 'Truyện kinh dị', 'truyen-kinh-di', NULL, '2021-01-04 11:36:18', '2021-01-04 11:36:18'),
(18, 'Khoa học viễn tưởng', 'khoa-hoc-vien-tuong', NULL, '2021-01-04 11:37:24', '2021-01-04 11:37:24'),
(19, 'Tiểu thuyết', 'tieu-thuyet', NULL, '2021-01-04 11:51:08', '2021-01-04 11:51:08'),
(20, 'Lãng mạn', 'lang-man', NULL, '2021-01-04 11:58:04', '2021-01-04 11:58:04'),
(21, 'Học Tập', 'hoc-tap', NULL, '2021-06-03 19:12:42', '2021-06-03 19:12:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `address`, `email`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Bảo Long', 1, 'Bắc Giang', 'long@gmail.com', '0382982699', NULL, NULL, '2021-01-04 08:22:18'),
(2, 'Nguyễn Thu Trang', 2, 'Thanh Hóa', 'nguyenthutrang@gmail.com', '0828427817', NULL, NULL, '2021-01-04 21:19:51'),
(3, 'Lê Minh Đức', 1, 'Phú Thọ', 'leminhduc@gmail.com', '0123456789', NULL, NULL, '2021-01-04 21:19:24'),
(4, 'Dương Thị Tuyết Nhung', 2, 'Hưng Yên', 'duongnhung@gmail.com', '0123456123', NULL, NULL, '2021-01-04 21:20:19'),
(5, 'Dương Tuấn Anh', 1, 'Hà Nam', 'ta@gmai.com', '0352713324', NULL, '2021-01-04 22:28:17', '2021-01-04 22:28:17'),
(6, 'Nguyễn Tiến Anh', 1, 'Thái Bình', 'tanh@gmai.com', '0122344434', NULL, '2021-01-04 22:29:43', '2021-01-04 22:29:43'),
(7, 'Trịnh Thị Lan Anh', 2, 'Nam Định', 'la@gmail.com', '0944668036', NULL, '2021-01-04 22:30:59', '2021-01-04 22:30:59'),
(8, 'Longaaaa', 1, 'abvbbbb', 'abvbbbb', '122333333', NULL, '2021-06-10 13:15:01', '2021-06-10 13:15:01'),
(9, 'Nguyễn Văn', 1, 'aaaa', 'aaaa', '0382982699', NULL, '2021-06-10 13:49:41', '2021-06-10 13:49:41'),
(11, 'abcxyz', 1, 'aaaaa', 'aaaaa', '0382982699', NULL, '2021-06-10 14:10:39', '2021-06-10 14:10:39'),
(12, 'abcxyz', 1, 'aaaaa', 'aaaaa', '0382982699', NULL, '2021-06-10 14:11:28', '2021-06-10 14:11:28'),
(13, 'abcxyz', 1, 'aaaaa', 'aaaaa', '0382982699', NULL, '2021-06-10 14:11:59', '2021-06-10 14:11:59'),
(14, 'longgga', 1, 'a', 'a', '0382982699', NULL, '2021-06-10 14:16:12', '2021-06-10 14:16:12'),
(15, 'Thầy Cường', 1, 'Hà Nội', 'Hà Nội', '123456', NULL, '2021-06-10 19:17:21', '2021-06-10 19:17:21'),
(16, 'long đẹp trai', 1, 'bac giang', 'bac giang', '0382982699', NULL, '2021-06-16 07:55:49', '2021-06-16 07:55:49'),
(17, 'longdeptraiiii', 1, 'bac giang', 'bac giang', '0382982699', NULL, '2021-06-16 08:01:49', '2021-06-16 08:01:49'),
(18, 'nguyễn bảo long', 1, 'bắc giang', 'bắc giang', '0382982699', NULL, '2021-06-24 06:40:44', '2021-06-24 06:40:44'),
(19, 'nguyễn bảo long', 1, 'bắc giang', 'long@gmail.com', '0382982699', NULL, '2021-06-24 06:50:24', '2021-06-24 06:50:24'),
(20, 'nguyễn bảo long', 1, 'bắc giang', 'long@gmail.com', '0382982699', NULL, '2021-06-24 06:50:59', '2021-06-24 06:50:59'),
(21, 'long', 1, 'aaa', 'aaa@gmail.com', '0382982699', NULL, '2021-06-24 11:30:21', '2021-06-24 11:30:21'),
(22, 'long', 1, 'aaaaa', 'aaaa@gmail.com', '0382982699', NULL, '2021-06-25 12:21:30', '2021-06-25 12:21:30'),
(23, 'Thais', 1, 'ha noi', 'thai@gmail.com', '0382982699', NULL, '2021-06-25 12:24:34', '2021-06-25 12:24:34'),
(24, 'huy thia', 1, 'ha noi', 'thai@gmail.com', '0382982699', NULL, '2021-06-25 12:32:01', '2021-06-25 12:32:01'),
(25, 'longgg', 1, 'aaa', 'aaaaa@gmail.com', '12345678', NULL, '2021-06-25 12:37:02', '2021-06-25 12:37:02'),
(26, 'Tường Nhi', 2, 'Xóm 3 - Thuận Minh - Thọ Xuân - Thanh Hóa', 'nhi@gmail.com', '0383648202', NULL, '2021-07-03 03:58:25', '2021-07-03 03:58:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_15_083052_khach_hang', 1),
(5, '2020_12_15_083132_don_hang', 1),
(6, '2020_12_15_083151_chi_tiet_don_hang', 1),
(7, '2020_12_15_083204_sach', 1),
(8, '2020_12_15_084246_the_loai', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cus_id` bigint(20) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `cus_id`, `total`, `date`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 1, 19, 274000, '2021-06-24', NULL, '2021-06-24 06:50:24', '2021-06-24 06:50:24'),
(18, 1, 20, 274000, '2021-06-24', NULL, '2021-06-24 06:50:59', '2021-06-24 06:50:59'),
(19, 1, 21, 274000, '2021-06-24', NULL, '2021-06-24 11:30:21', '2021-06-24 11:30:21'),
(20, 1, 22, 1018000, '2021-06-25', NULL, '2021-06-25 12:21:30', '2021-06-25 12:21:30'),
(21, 1, 23, 39000, '2021-06-25', NULL, '2021-06-25 12:24:34', '2021-06-25 12:24:34'),
(22, 1, 24, 235000, '2021-06-25', NULL, '2021-06-25 12:32:01', '2021-06-25 12:32:01'),
(23, 1, 25, 235000, '2021-06-25', NULL, '2021-06-25 12:37:02', '2021-06-25 12:37:02'),
(24, 1, 26, 532, '2021-07-03', NULL, '2021-07-03 03:58:25', '2021-07-03 03:58:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `book_id` bigint(20) NOT NULL,
  `price` int(20) NOT NULL,
  `quanty` int(20) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `book_id`, `price`, `quanty`, `sale`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 24, 27, 235, 1, NULL, NULL, '2021-07-03 03:58:25', '2021-07-03 03:58:25'),
(42, 24, 28, 64, 1, NULL, NULL, '2021-07-03 03:58:25', '2021-07-03 03:58:25'),
(43, 24, 32, 105, 1, NULL, NULL, '2021-07-03 03:58:25', '2021-07-03 03:58:25'),
(44, 24, 37, 64, 2, NULL, NULL, '2021-07-03 03:58:25', '2021-07-03 03:58:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint(20) NOT NULL,
  `verify_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tt_tk` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phonenumber`, `email_verified_at`, `password`, `role`, `verify_code`, `tt_tk`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(77, 'nguyễn bảo long', 'long@gmail.com', '0382982699', NULL, '$2y$10$dhgBgvYIwpsfRE4eFBKKgOjk9sPay1hyo3/P3b/mCYNcMvv08lFpy', 1, '866858', NULL, 0, NULL, '2021-06-24 07:00:24', '2021-06-24 07:00:24'),
(78, 'Trang', 'trang@gmail.com', '0382982699', NULL, '$2y$10$7aCFrLYkYuHpk0MqdpSmMe2TM5rnd9boD8OduLyEMjaVycjMkMHru', 2, '497025', NULL, 0, NULL, '2021-06-24 07:04:09', '2021-06-24 07:04:09'),
(79, 'Nhung', 'nhung@gmail.com', '0382982699', NULL, '$2y$10$4A3K.wfnu8H1xWpSJq/UG.cq/qFqI6id2LJFOE56D24guzkqL5BL6', 2, '438708', NULL, 0, NULL, '2021-06-24 07:09:02', '2021-06-24 07:09:02'),
(80, 'Duc', 'duc@gmail.com', '0382982699', NULL, '$2y$10$CXGKIMC6.EgJaDS11ulsv.AAq0yV6C/XWfyAzDkRo5Gsnqq9asNL2', 2, '674656', NULL, 0, NULL, '2021-06-24 07:10:16', '2021-06-24 07:10:16'),
(81, 'thuan', 'thuan@gmail.com', '0382982699', NULL, '$2y$10$u1FVHbDfI9aszQdHxcLUAeK3eXmVZt80MHF7Cq9uJfR.SsMZjkANa', 2, '129212', NULL, 0, NULL, '2021-06-24 07:19:40', '2021-06-24 07:19:40'),
(82, 'tien anh', 'lll@gmail.com', '0382982699', NULL, '$2y$10$Q0lzs6RkJpbDH5jIzXOHDeDf8U9ggHeBITFiHyPFfp6yj/Tyq1lNe', 2, '549231', NULL, 0, NULL, '2021-06-24 07:26:19', '2021-06-24 07:26:19'),
(83, 'longbggb', 'loo@gmail.com', '0382982699', NULL, '$2y$10$6V2IlCw6Twq1OfW4pFN6regsgC0kpow5LSJTJc/N94Tri4HyazJYq', 2, '840980', NULL, 0, NULL, '2021-06-24 07:27:56', '2021-06-24 07:27:56'),
(84, 'trangbb', 'bb@gmail.com', '0382982699', NULL, '$2y$10$QJe2qW8uHMlejK0FI35Sfuy9jJmM.ke63T5JugQZqRoIqV1q1cS5y', 2, '529855', NULL, 0, NULL, '2021-06-24 07:33:52', '2021-06-24 07:33:52'),
(100, 'Thu Trang', 'trangnt@gmail.com', '0828427817', NULL, '$2y$10$E2hQGrZ6FpoCc3IRJ4RNSuxOESZ4nQ9EfRrL7sS7HPUSgsm9UwfTq', 1, '051220', NULL, 1, NULL, '2021-07-03 02:00:51', '2021-07-03 02:08:54'),
(101, 'Tường Nhi', 'nhi@gmail.com', '0383648202', NULL, '$2y$10$.j5wqvfyg7tzVR47LFCNU.FRqGbgC/6hxVxXkKKu2DEh6CO93yrGi', 3, '299278', NULL, 1, NULL, '2021-07-03 03:54:50', '2021-07-03 03:55:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
