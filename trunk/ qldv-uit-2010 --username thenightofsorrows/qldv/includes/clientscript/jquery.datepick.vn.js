(function($) {
	$.datepick.regional['vi'] = {
		monthNames: ['Th&#225;ng M&#7897;t', 'Th&#225;ng Hai', 'Th&#225;ng Ba', 'Th&#225;ng T&#432;', 'Th&#225;ng N&#259;m', 'Th&#225;ng S&#225;u',
		'Th&#225;ng B&#7843;y', 'Th&#225;ng T&#225;m', 'Th&#225;ng Ch&#237;n', 'Th&#225;ng M&#432;&#7901;i', 'Th&#225;ng M&#432;&#7901;i M&#7897;t', 'Th&#225;ng M&#432;&#7901;i Hai'],
		monthNamesShort: ['Th&#225;ng 1', 'Th&#225;ng 2', 'Th&#225;ng 3', 'Th&#225;ng 4', 'Th&#225;ng 5', 'Th&#225;ng 6',
		'Th&#225;ng 7', 'Th&#225;ng 8', 'Th&#225;ng 9', 'Th&#225;ng 10', 'Th&#225;ng 11', 'Th&#225;ng 12'],
		dayNames: ['Ch&#7911; Nh&#7853;t', 'Th&#7913; Hai', 'Th&#7913; Ba', 'Th&#7913; T&#432;', 'Th&#7913; N&#259;m', 'Th&#7913; S&#225;u', 'Th&#7913; B&#7843;y'],
		dayNamesShort: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
		dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
		dateFormat: 'yyyy-mm-dd', firstDay: 0,
		renderer: $.datepick.defaultRenderer,
		prevText: '&#x3c;Tr&#432;&#7899;c', prevStatus: 'Th&#225;ng tr&#432;&#7899;c',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: 'N&#259;m tr&#432;&#7899;c',
		nextText: 'Ti&#7871;p&#x3e;', nextStatus: 'Th&#225;ng sau',
		nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: 'N&#259;m sau',
		currentText: 'H&#244;m nay', currentStatus: 'Th&#225;ng hi&#7879;n t&#7841;i',
		todayText: 'H&#244;m nay', todayStatus: 'Th&#225;ng hi&#7879;n t&#7841;i',
		clearText: 'X&#243;a', clearStatus: 'X&#243;a ng&#224;y hi&#7879;n t&#7841;i',
		closeText: '&#272;&#243;ng', closeStatus: '&#272;&#243;ng v&#224; kh&#244;ng l&#432;u l&#7841;i thay &#273;&#7893;i',
		yearStatus: 'N&#259;m kh&#225;c', monthStatus: 'Th&#225;ng kh&#225;c',
		weekText: 'Tu', weekStatus: 'Tu&#7847;n trong n&#259;m',
		dayStatus: '&#272;ang ch&#7885;n DD, \'ng&#224;y\' d M', defaultStatus: 'Ch&#7885;n ng&#224;y',
		isRTL: false
	};
	$.datepick.setDefaults($.datepick.regional['vi']);
})(jQuery);