// --------------------------------------------------------------------
// Author  : mashimonator
// Create  : 2009/01/08
// Update  : 2009/01/14
// Description : Loadイベント時に自動で印刷ダイアログ表示を行う
// --------------------------------------------------------------------

var autoPrint = {

	errorMsg : 'ご使用のブラウザのツールメニューから印刷を行ってください。',

	//-----------------------------------------
	// Main処理
	//-----------------------------------------
	main : function() {

		var v;

		// print() が使えるブラウザかどうかを判定
		if (autoPrint.judge) {
			v = 1;
		} else {
			v = 0;
		}
		if (document.getElementById || document.layers) {
			v = 1;
		}

		// 印刷
		if (v) {
			try {
				window.print();
			} catch (e) {
				alert(this.errorMsg);
			}
		} else {
			alert(this.errorMsg);
		}

	},

	//-----------------------------------------
	// window.print() の対応ブラウザ判定
	//-----------------------------------------
	judge : function() {

		var userSystem = new autoPrint.getBrowserInfo(navigator.userAgent);

		if ( userSystem.browserShortName == "ie" && userSystem.browserVersion < 5 ) {
			// IE 5以上
			return false;
		} else if ( userSystem.browserShortName == "nn" && userSystem.browserVersion < 4 ) {
			// Netscape 4以上
			return false;
		} else if ( userSystem.browserShortName == "ns" && userSystem.browserVersion < 4 ) {
			// Netscape 4以上
			return false;
		} else if ( userSystem.browserShortName == "op" && userSystem.browserVersion < 6 ) {
			// Opera 6以上
			return false;
		}

		return true;

	},

	//-----------------------------------------
	// ブラウザ情報取得
	//-----------------------------------------
	getBrowserInfo : function() {

		var key, index, keyIndex, keyIndexEnd, versionKey, i, j;
		var uaString = navigator.userAgent.toUpperCase();

		this.browserLongName = "---";
		this.browserShortName = "---";
		this.browserVersion = "---";

		var BROWSERS = new Object();
		BROWSERS['MZ'] = new setBrowser('Mozilla','mz','GECKO');
		BROWSERS['IE'] = new setBrowser('Internet Explorer','ie','MSIE');
		BROWSERS['AO'] = new setBrowser('AOL','ao','AOL');
		BROWSERS['SF'] = new setBrowser('Safari','sf','SAFARI');
		BROWSERS['OP'] = new setBrowser('Opera','op','OPERA');
		BROWSERS['OW'] = new setBrowser('OmniWeb','ow','OMNIWEB');
		BROWSERS['IC'] = new setBrowser('iCab','ic','ICAB');
		BROWSERS['NS'] = new setBrowser('Netscape','ns','NETSCAPE,NETSCAPE6');
		BROWSERS['NN'] = new setBrowser('Netscape Navigator','nn','MOZILLA');
		BROWSERS['FF'] = new setBrowser('Firefox','ff','FIREFOX');


		var checkVersionExp01 = new Array(' ', '/', '-', '');
		var checkVersionExp02 = new Array(';', ' ', '(', '[', ')', '+', '-', '/');

		uaString = " " + uaString + ";";
		

		index = 0;
		for (key in BROWSERS) {
			for (i=0; i<BROWSERS[key].keyword.length; i++) {
				keyIndex = uaString.indexOf(BROWSERS[key].keyword[i].toUpperCase());
				if (keyIndex > index) {
					this.browserLongName = BROWSERS[key].longName;
					this.browserShortName = BROWSERS[key].shortName;
					versionKey = BROWSERS[key].keyword[i].toUpperCase();
					index = keyIndex;
				}
			}
		}

		// Navigator is reary?
		if (this.browserShortName == "nn" && uaString.indexOf("COMPATIBLE")>0) {
			this.browserLongName = "---";
			this.browserShortName = "---";
		}

		// Version Check
		if (this.browserLongName != "---") {
			for (i=0; i<checkVersionExp01.length; i++) {
				key = versionKey + checkVersionExp01[i];
				if ( ( keyIndex = uaString.indexOf(key) ) > 0 ) break;
			}
			// Mozilla
			if ( key == 'GECKO/' ) {
				key = 'RV:';
				keyIndex = uaString.indexOf(key);
			}
			keyIndex = keyIndex + key.length;
			index = uaString.length;
			for (i=0; i<checkVersionExp02.length; i++) {
				if ((key = uaString.indexOf(checkVersionExp02[i], keyIndex)) > 0) {
					if (key < index) {
						keyIndexEnd = key;
						index = keyIndexEnd;
					}
				}
			}
			this.browserVersion = uaString.substring(keyIndex, keyIndexEnd);
		}

		function setBrowser(longName,shortName,keyWord) {
			this.longName = longName;
			this.shortName = shortName;
			this.keyword = keyWord.split(",");
		}

	},

	//-----------------------------------------
	// Loadイベントに追加
	//-----------------------------------------
	addLoadEvent : function() {
		try {
			window.addEventListener('load', this.main, false);
		} catch (e) {
			window.attachEvent('onload', this.main);
		}
	}

}

autoPrint.addLoadEvent();

