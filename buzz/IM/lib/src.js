/*
	The MIT License (MIT)
	Copyright (c) 2020 Amir Adhamian (github.com/c-dyane)
	https://github.com/c-dyane/buzzer/blob/main/LICENSE
	https://github.com/c-dyane/archive/blob/main/LICENSE
*/

// disables ENTER-key
window.addEventListener(
'keydown',
function(e) {
	if (
	e.keyIdentifier == 'U+000A' ||
	e.keyIdentifier == 'Enter' ||
	e.keyCode == 13
	) {
		if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
			e.preventDefault()
			return false
		}
	}
},
true)
