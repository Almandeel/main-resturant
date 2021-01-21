<!-- keyboard widget css & script (required) -->
<link href="{{ asset('dashboard/css/keyboard.css') }}" rel="stylesheet">
<script src="{{ asset('dashboard/js/jquery.keyboard.js') }}"></script>
<script src="{{ asset('dashboard/js/jquery.keyboard.extension-all.js') }}"></script>

<script>
    $('input[type="number"]')
	.keyboard({
		// keyboard will open showing last key set used
		resetDefault: false,
		userClosed: true, // keyboard open until user closes with accept or cancel
		autoAccept: true, // required for userClosed: true
		layout: 'custom',
		display: {
			'alt'    : 'AltGr:It\'s all Greek to me',
			// in v1.26.8, meta keys can be named `meta` followed by any letter, underscore or dash.
			// older versions would only allow the name `meta` followed by a number, then any letter or underscore
			// see https://github.com/Mottie/Keyboard/issues/504
			'meta1'  : '\u2666:end of alphabet', // Diamond with label that shows in the title (spaces are okay here)
			'meta-2' : '\u2665:Russian',         // Heart
			'meta3'  : '\u2663:zodiac',          // Club
			'meta_9' : '\u2660:numbers'          // Spade
		},
		customLayout: {
			'normal' : [
				// Add labels using a ":" after the key's name and replace spaces with "_"
				// without the labels this line is just 'a b c d e f g'
				'a:a_letter,_that_sounds_like_"ey" b:a_bug_that_makes_honey c:is_when_I_look_around d:a_grade,_I_never_got e:is_what_girls_say_when_they_run_away_from_me f:u,_is_what_I_say_to_those_screaming_girls! g:gee,_is_that_the_end_of_my_wittiness?',
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'shift' : [
				'A B C D E F G',
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'alt' : [
				'\u03b1 \u03b2 \u03b3 \u03b4 \u03b5 \u03b6 \u03b7', // lower case Greek
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'alt-shift' : [
				'\u0391 \u0392 \u0393 \u0394 \u0395 \u0396 \u0397', // upper case Greek
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta1' : [
				't u v w x y z', // lower case end of alphabet
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta1-shift' : [
				'T U V W X Y Z', // upper case
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta1-alt' : [
				'0 9 8 7 6 5 4', // numbers
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta1-alt-shift' : [
				') ( * & ^ % $', // shifted numbers
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta-2' : [
				'\u0430 \u0431 \u0432 \u0433 \u0434 \u0435 \u0436', // lower case Russian
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta-2-shift' : [
				'\u0410 \u0411 \u0412 \u0413 \u0414 \u0415 \u0416', // upper case Russian
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta3' : [
				'\u2648 \u2649 \u264A \u264B \u264C \u264D \u264E', // Zodiac
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			],
			'meta_9' : [
				'1 2 3 4 5 6 7', // only because I ran out of ideas
				'{shift} {alt} {meta1} {meta-2} {meta3} {meta_9}',
				'{bksp} {sp:1} {accept} {cancel}'
			]
		}
	})
	.addTyping();
</script>

