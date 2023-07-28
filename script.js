// ラジオボタンの変更イベントリスナー
var themeOptions = document.getElementById("themeOptions");
themeOptions.addEventListener("change", function(event) {
	var selectedTheme = event.target.value;
	setTheme(selectedTheme);
});

// テーマに基づいてスタイルを設定する関数
function setTheme(theme) {
	// ボディ要素のクラスを切り替える
	document.body.className = theme;
}

// ページロード時にデフォルトテーマを設定
setTheme("default");
