<?php 
include_once('TextRankFacade.php');
include_once('StopWords/Vietnamese.php');
include_once('Tool/Parser.php');

$text = "Phóng viên Phùng một nghệ sĩ nhiếp ảnh tài hoa, có niềm đam mê với nghề và có một tâm hồn nhạy cảm, được trưởng phòng giao nhiệm vụ đi chụp một tấm ảnh về cảnh biển có sương để bổ sung vào bộ ảnh lịch. Anh đến một vùng biển miền Trung vào giữa tháng bảy. Ngoài Đẩu, người đồng đội cũ giờ làm chánh án tòa án huyện, anh đã quen thân với Phác, một cậu bé thường đi cùng ông ngoại chở gỗ từ trên rừng về bán cho xưởng đóng tàu. Sau khoảng tuần lễ chưa chụp được bức ảnh ưng ý, tình cờ anh thấy cảnh một chiếc thuyền ngoài xa, đang lái vó trong làn sương sớm mũi thuyền in một nét mơ hồ lòe nhòe vào bầu sương mù trắng như sữa pha đôi chút màu hồng hồng do ánh mặt trời chiếu vào, vài bóng người ngồi yên phăng phắc như tượng trên chiếc mui khum khum đang hướng mặt vào bờ tạo nên một khung cảnh từ đường nét đến ánh sáng đều hài hòa và đẹp, một vẻ đẹp thực đơn giản và toàn bích. Phùng nhanh chóng bấm liên thanh một hồi, thu vào chiếc máy ảnh của anh cái đẹp tuyệt đỉnh của ngoại cảnh, một vẻ đẹp thật đơn giản nhưng đạt đến sự hoàn mỹ và toàn bích khiến cho tâm hồn Phùng như được gội rửa và trong ngần trong khoảnh khắc. Tuy nhiên, khi chiếc thuyền vào bờ, Phùng chứng kiến một cảnh tượng nghiệt ngã, phi thẩm mỹ: hai vợ chồng người dân chài bước vào bờ, người đàn bà mặt rổ dáng người thô kệch, người đàn ông đôi mắt nhìn chằm chằm vào lưng người đàn bà đang đi như mắt con gấu khổng lồ, rồi người chồng rút thắt lưng ra đánh vào lưng người đàn bà tới tấp. Vừa đánh hắn vừa chửi chúng mày chết hết đi, chết hết đi cho ông nhờ, rồi Phác, chính là đứa con của cặp vợ chồng kia, xông vào ngăn cản, đánh lại bố. Cảnh tượng này những ngày sau đó lại tiếp diễn, chỉ khác là lần này khi lão đàn ông vừa rời khỏi thuyền thì có thêm đứa con gái cũng bơi vào bờ, rượt theo em nó và giành được con dao găm thằng bé giấu trong cạp quần. Phóng viên Phùng đánh nhau với lão đàn ông và bị thương nhẹ. Tòa án gọi người đàn bà đến. Tại đây, chánh án Đẩu vì căm giận người đàn ông vũ phu nhiều lần đánh vợ ba ngày một trận nhẹ năm ngày một trận nặng, đã khuyên người đàn bà ly hôn, nhưng bà ta còn xin Đẩu đừng bắt tù chồng bà mà hãy bắt bà bỏ tù. Nhưng không ngờ người đàn bà đã van xin Đẩu con lạy tòa tòa đừng bắt con bỏ nó. Sau đó, chị kể lại cuộc đời, gia cảnh của mình, lý do chị không muốn bỏ chồng vì gia đình họ cần một người đàn ông để chèo chống lúc phong ba và nuôi cả một đàn con. Người đàn bà chấp nhận sống nhẫn nhục trong sự ngược đãi của chồng là vì những đứa con. Một người đàn bà có tình thương con vô bờ bến, sự cảm thông cho chồng, thấu hiểu lẽ đời đó chính là quyền uy có sức công phá lớn nhất để cảm thông cả pháp luật mà một người lao động lam lũ có được. Qua đó, chánh án Đẩu vỡ lẽ ra nhiều điều trong cách nhìn nhận cuộc sống còn phóng viên Phùng lại hiểu thêm về mối quan hệ giữa nghệ thuật và cuộc đời. Cuộc đời còn nhiều góc khuất mà nghệ thuật chưa vươn tới, ẩn chứa nhiều ngang trái oái oăm mà khi đến gần mới có thể nhận được, chỉ có lòng tốt và kiến thức sách vở thì không thể giải quyết được vấn đề thực tế, mà phải có một cái nhìn sâu sắc đa diện và nhiều chiều về một vấn đề trong cuộc sống. Tấm ảnh của Phùng trong năm ấy và nhiều năm về sau vẫn còn được treo ở nhiều nơi, nhất là trong các gia đình sành nghệ thuật. Nhưng cứ mỗi lần Phùng nhìn bức ảnh, những ám ảnh, trăn trở về hình ảnh người đàn bà vùng biển lại đến với anh.";

$tr = new TextRankFacade();

$stopWords = new Vietnamese();
$tr->setStopWords($stopWords);

// Array of the most important keywords:
$result = $tr->getOnlyKeyWords($text); 
//var_dump($result);

// Array of the sentences from the most important part of the text:
$result = $tr->getHighlights($text); 
var_dump($result);

// Array of the most important sentences from the text:
$result = $tr->summarizeTextBasic($text);
//var_dump($result);
?>
