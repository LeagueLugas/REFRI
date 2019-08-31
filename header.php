<html>
<head>
    <meta charset="UTF-8">
    <title>header</title>
    <link rel="stylesheet" href="<?=$css_dir?>/header.css" />
    <link rel="stylesheet" href="<?=$css_dir?>/reset.css" />
	<script src="<?=$js_dir?>/index.js"></script>
</head>
<body>
    <div id="header">
        <div class="MainHeaderDiv">
            <div class="MainHeaderLogoDiv">
                <img src="<?=$img_dir?>/logo_coral.png" class="MainLogo" />
            </div>
            <div class="MainHeaderSearchDiv">
                <div class="MainHeaderSearchInputDiv">
                    <input type="text" class="MainHeaderSearchInput" placeholder="상품 검색" />
                    <div class="MainHeaderSearchInputIconDiv">
                        <img src="<?=$img_dir?>/lens.png" class="MainSearchInputIcon" />
                    </div>
                </div>        
            </div>
            <div class="MainHeaderButtonDiv">
				<? if($uuid) { ?>
                <input type="button" value="등록하기" class="MainheaderButton" />
                <input type="button" value="구매하기" class="MainheaderButton" />
                <input type="button" value="마이페이지" class="MainheaderButton" />
				<? } else {?>
                <input type="button" value="로그인" class="MainheaderButton" onclick="LoginButtonClick()" />
                <input type="button" value="회원가입" class="MainheaderButton" />
				<? } ?>
            </div>
        </div>
    </div>
