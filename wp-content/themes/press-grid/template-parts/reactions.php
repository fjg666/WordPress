<script type="text/javascript">
	<?php
	$reactions = array();
	$emojis = Press_Grid_Tpl::get_emotions();
	foreach ($emojis as $key => $value) {
		$reactions[] = array('emoji'=>$key, 'label'=>$value);
	}
	?>
	var pressgrid_reactions = <?php echo json_encode($reactions); ?>;
</script>
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="emoji-icon-no-reaction" viewBox="0 0 111 110.6">
<g>
<defs>
<rect id="svgid_1_r1" width="111" height="110.6"/>
</defs>
<clipPath id="svgid_2_c1">
<use xlink:href="#svgid_1_r1"  overflow="visible"/>
</clipPath>
<path clip-path="url(#svgid_2_c1)" fill="#b7b7b7" d="M110.8,60.1C99.9,77,79.2,88.4,55.5,88.4c-23.7,0-44.3-11.4-55.2-28.2c0.2,1.9,0.4,3.8,0.8,5.7c0.2,1,0.4,2,0.7,2.9c6.1,24,27.8,41.8,53.8,41.8c26,0,47.7-17.8,53.8-41.8c0.3-1.2,0.6-2.4,0.8-3.6L110.8,60.1z"/>
<path clip-path="url(#svgid_2_c1)" fill="#d6d6d6" d="M0,55.3c0,1.6,0.1,3.2,0.2,4.8C11.1,77,31.8,88.4,55.5,88.4c23.7,0,44.4-11.4,55.3-28.3c0.1-1.6,0.2-3.2,0.2-4.8c0-5.3-0.8-10.5-2.2-15.4l0-1.2c-0.1,0-0.2,0.1-0.4,0.1C101.4,16.3,80.4,0,55.5,0C30.7,0,9.6,16.3,2.6,38.7h0v0C0.9,43.9,0,49.5,0,55.3"/>
<path clip-path="url(#svgid_2_c1)" fill="none" stroke="#2b2b2b" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" d="M38.8,60.1c0,12.5,8.3,16.7,16.7,16.7s16.7-4.2,16.7-16.7"/>
<path clip-path="url(#svgid_2_c1)" fill="#2b2b2b" d="M42.8,42.2c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2c0-3.4,2.8-6.2,6.2-6.2S42.8,38.8,42.8,42.2"/>
<path clip-path="url(#svgid_2_c1)" fill="#2b2b2b" d="M78.6,42.2c0,3.4-2.8,6.2-6.2,6.2c-3.4,0-6.2-2.8-6.2-6.2c0-3.4,2.8-6.2,6.2-6.2C75.9,36.1,78.6,38.8,78.6,42.2"/>
</g>
</symbol>
<symbol id="emoji-icon-like" viewBox="0 0 111 110.6">
<g>
<defs>
<rect id="svgid_1_r2" width="111" height="110.6"/>
</defs>
<clipPath id="svgid_2_c2">
<use xlink:href="#svgid_1_r2"  overflow="visible"/>
</clipPath>
<path clip-path="url(#svgid_2_c2)" fill="#DDBE3C" d="M110.8,60.1C99.9,77,79.2,88.4,55.5,88.4c-23.7,0-44.3-11.4-55.2-28.2c0.2,1.9,0.4,3.8,0.8,5.7c0.2,1,0.4,2,0.7,2.9c6.1,24,27.8,41.8,53.8,41.8c26,0,47.7-17.8,53.8-41.8c0.3-1.2,0.6-2.4,0.8-3.6L110.8,60.1z"/>
<path clip-path="url(#svgid_2_c2)" fill="#FFD835" d="M0,55.3c0,1.6,0.1,3.2,0.2,4.8C11.1,77,31.8,88.4,55.5,88.4c23.7,0,44.4-11.4,55.3-28.3c0.1-1.6,0.2-3.2,0.2-4.8c0-5.3-0.8-10.5-2.2-15.4l0-1.2c-0.1,0-0.2,0.1-0.4,0.1C101.4,16.3,80.4,0,55.5,0C30.7,0,9.6,16.3,2.6,38.7h0v0C0.9,43.9,0,49.5,0,55.3"/>
<path clip-path="url(#svgid_2_c2)" fill="none" stroke="#795523" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" d="M38.8,60.1c0,12.5,8.3,16.7,16.7,16.7s16.7-4.2,16.7-16.7"/>
<path clip-path="url(#svgid_2_c2)" fill="#795523" d="M42.8,42.2c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2c0-3.4,2.8-6.2,6.2-6.2S42.8,38.8,42.8,42.2"/>
<path clip-path="url(#svgid_2_c2)" fill="#795523" d="M78.6,42.2c0,3.4-2.8,6.2-6.2,6.2c-3.4,0-6.2-2.8-6.2-6.2c0-3.4,2.8-6.2,6.2-6.2C75.9,36.1,78.6,38.8,78.6,42.2"/>
</g>
</symbol>
<symbol id="emoji-icon-haha" viewBox="0 0 111 110.6">
<g>
<defs>
<rect id="svgid_1_r3" width="111" height="110.6"/>
</defs>
<clipPath id="svgid_2_c3">
<use xlink:href="#svgid_1_r3"  overflow="visible"/>
</clipPath>
<path clip-path="url(#svgid_2_c3)" fill="#DDBE3C" d="M110.8,60.1C99.9,77,79.2,88.4,55.5,88.4c-23.7,0-44.3-11.4-55.2-28.2c0.2,1.9,0.4,3.8,0.8,5.7c0.2,1,0.4,2,0.7,2.9c6.1,24,27.8,41.8,53.8,41.8c26,0,47.7-17.8,53.8-41.8c0.3-1.2,0.6-2.4,0.8-3.6L110.8,60.1z"/>
<path clip-path="url(#svgid_2_c3)" fill="#FFD835" d="M0,55.3c0,1.6,0.1,3.2,0.2,4.8C11.1,77,31.8,88.4,55.5,88.4c23.7,0,44.4-11.4,55.3-28.3c0.1-1.6,0.2-3.2,0.2-4.8c0-5.3-0.8-10.5-2.2-15.4l0-1.2c-0.1,0-0.2,0.1-0.4,0.1C101.4,16.3,80.4,0,55.5,0C30.7,0,9.6,16.3,2.6,38.7h0v0C0.9,43.9,0,49.5,0,55.3"/>
<path clip-path="url(#svgid_2_c3)" fill="#795523" d="M72.2,58.5H38.8c0,15,8.3,19.9,16.7,19.9S72.2,73.5,72.2,58.5"/>
<path clip-path="url(#svgid_2_c3)" fill="none" stroke="#795523" stroke-width="4.561" stroke-linecap="round" stroke-linejoin="round" d="M72.2,58.5H38.8c0,15,8.3,19.9,16.7,19.9S72.2,73.5,72.2,58.5z"/>
<path clip-path="url(#svgid_2_c3)" fill="none" stroke="#00BAFF" stroke-width="8.346" stroke-linecap="round" stroke-linejoin="round" d="M78.5,47.5c0-4.2-3.9-4.2-8.1-4.2"/>
<polyline clip-path="url(#svgid_2_c3)" fill="none" stroke="#795523" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" points="74.3,34.9 65.9,43.3 78.5,43.3 	"/>
<path clip-path="url(#svgid_2_c3)" fill="none" stroke="#00BFF7" stroke-width="8.346" stroke-linecap="round" stroke-linejoin="round" d="M39,43.3c-4.2,0-8.6,0-8.6,4.2"/>
<polyline clip-path="url(#svgid_2_c3)" fill="none" stroke="#795523" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" points="34.5,34.9 42.9,43.3 30.4,43.3 	"/>
</g>
</symbol>
<symbol id="emoji-icon-love" viewBox="0 0 111 110.6">
<g>
<defs>
<rect id="svgid_1_r4" width="111" height="110.6"/>
</defs>
<clipPath id="svgid_2_c4">
<use xlink:href="#svgid_1_r4"  overflow="visible"/>
</clipPath>
<path clip-path="url(#svgid_2_c4)" fill="#DDBE3C" d="M110.8,60.1C99.9,77,79.2,88.4,55.5,88.4c-23.7,0-44.3-11.4-55.2-28.2c0.2,1.9,0.4,3.8,0.8,5.7c0.2,1,0.4,2,0.7,2.9c6.1,24,27.8,41.8,53.8,41.8c26,0,47.7-17.8,53.8-41.8c0.3-1.2,0.6-2.4,0.8-3.6L110.8,60.1z"/>
<path clip-path="url(#svgid_2_c4)" fill="#FFD835" d="M0,55.3c0,1.6,0.1,3.2,0.2,4.8C11.1,77,31.8,88.4,55.5,88.4c23.7,0,44.4-11.4,55.3-28.3c0.1-1.6,0.2-3.2,0.2-4.8c0-5.3-0.8-10.5-2.2-15.4l0-1.2c-0.1,0-0.2,0.1-0.4,0.1C101.4,16.3,80.4,0,55.5,0C30.7,0,9.6,16.3,2.6,38.7h0v0C0.9,43.9,0,49.5,0,55.3"/>
<path clip-path="url(#svgid_2_c4)" fill="#795523" d="M72.2,58.5H38.8c0,15,8.3,19.9,16.7,19.9S72.2,73.5,72.2,58.5"/>
<path clip-path="url(#svgid_2_c4)" fill="none" stroke="#795523" stroke-width="4.561" stroke-linecap="round" stroke-linejoin="round" d="M72.2,58.5H38.8c0,15,8.3,19.9,16.7,19.9S72.2,73.5,72.2,58.5z"/>
<path clip-path="url(#svgid_2_c4)" fill="#FF493B" d="M68.5,35.2c1,0,1.8,0.3,2.5,0.8c0.5,0.3,0.9,0.7,1.3,1.1c0.1,0.1,0.1,0.1,0.2,0c0.5-0.5,1.1-1,1.8-1.3c1.2-0.7,2.5-0.7,3.7-0.2c1.4,0.5,2.2,1.5,2.5,2.9c0.3,1.6-0.2,2.9-1.1,4.2c-0.4,0.5-0.9,1-1.4,1.5c-0.8,0.8-1.7,1.6-2.5,2.4c-0.9,0.9-1.8,1.7-2.7,2.6c-0.3,0.3-0.6,0.3-0.9,0c-1.4-1.4-2.8-2.7-4.2-4.1c-0.5-0.5-1-1-1.5-1.5c-0.8-0.8-1.5-1.8-1.8-2.9c-0.4-1.4-0.2-2.8,0.7-4c0.6-0.8,1.5-1.2,2.5-1.3C67.9,35.2,68.2,35.2,68.5,35.2"/>
<path clip-path="url(#svgid_2_c4)" fill="#FF493B" d="M33.9,35.2c1,0,1.8,0.3,2.5,0.8c0.5,0.3,0.9,0.7,1.3,1.1c0.1,0.1,0.1,0.1,0.2,0c0.5-0.5,1.1-1,1.8-1.3c1.2-0.7,2.5-0.7,3.7-0.2c1.4,0.5,2.2,1.5,2.5,2.9c0.3,1.6-0.2,2.9-1.1,4.2c-0.4,0.5-0.9,1-1.4,1.5c-0.8,0.8-1.7,1.6-2.5,2.4c-0.9,0.9-1.8,1.7-2.7,2.6c-0.3,0.3-0.6,0.3-0.9,0c-1.4-1.4-2.8-2.7-4.2-4.1c-0.5-0.5-1-1-1.5-1.5c-0.8-0.8-1.5-1.8-1.8-2.9c-0.4-1.4-0.2-2.8,0.7-4c0.6-0.8,1.5-1.2,2.5-1.3C33.3,35.2,33.6,35.2,33.9,35.2"/>
</g>
</symbol>
<symbol id="emoji-icon-sad" viewBox="0 0 111 110.6">
<g>
<defs>
<rect id="svgid_1_r5" width="111" height="110.6"/>
</defs>
<clipPath id="svgid_2_c5">
<use xlink:href="#svgid_1_r5"  overflow="visible"/>
</clipPath>
<path clip-path="url(#svgid_2_c5)" fill="#68AA3D" d="M110.8,60.1C99.9,77,79.2,88.4,55.5,88.4c-23.7,0-44.3-11.4-55.2-28.2c0.2,1.9,0.4,3.8,0.8,5.7c0.2,1,0.4,2,0.7,2.9c6.1,24,27.8,41.8,53.8,41.8c26,0,47.7-17.8,53.8-41.8c0.3-1.2,0.6-2.4,0.8-3.6L110.8,60.1z"/>
<path clip-path="url(#svgid_2_c5)" fill="#7ACE44" d="M0,55.3c0,1.6,0.1,3.2,0.2,4.8C11.1,77,31.8,88.4,55.5,88.4c23.7,0,44.4-11.4,55.3-28.3c0.1-1.6,0.2-3.2,0.2-4.8c0-5.3-0.8-10.5-2.2-15.4l0-1.2c-0.1,0-0.2,0.1-0.4,0.1C101.4,16.3,80.4,0,55.5,0C30.7,0,9.6,16.3,2.6,38.7h0v0C0.9,43.9,0,49.5,0,55.3"/>
<polyline clip-path="url(#svgid_2_c5)" fill="none" stroke="#795523" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" points="74.3,36.1 65.9,44.4 78.5,44.4 	"/>
<polyline clip-path="url(#svgid_2_c5)" fill="none" stroke="#795523" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" points="35.4,36.1 43.7,44.4 31.2,44.4 	"/>
<polyline clip-path="url(#svgid_2_c5)" fill="none" stroke="#795523" stroke-width="4.561" stroke-linecap="round" stroke-linejoin="round" points="31.2,68.1 38.3,61 45.7,68.4 54.4,59.8 62.8,68.3 71,60.1 78.9,68 	"/>
</g>
</symbol>
<symbol id="emoji-icon-angry" viewBox="0 0 111 110.6">
<g>
<defs>
<rect id="svgid_1_r6" width="111" height="110.6"/>
</defs>
<clipPath id="svgid_2_c6">
<use xlink:href="#svgid_1_r6"  overflow="visible"/>
</clipPath>
<path clip-path="url(#svgid_2_c6)" fill="#DB3D35" d="M110.7,60.5C99.8,77.3,79,88.6,55.3,88.4C31.6,88.3,11,76.8,0.3,59.9c0.1,1.9,0.4,3.8,0.7,5.7c0.2,1,0.4,2,0.6,2.9c5.9,24,27.6,41.9,53.5,42.1c26,0.2,47.8-17.5,54.1-41.4c0.3-1.2,0.6-2.4,0.8-3.6L110.7,60.5z"/>
<path clip-path="url(#svgid_2_c6)" fill="#FF493B" d="M0,55c0,1.6,0.1,3.2,0.2,4.8c10.8,16.9,31.4,28.5,55.1,28.6c23.7,0.2,44.5-11.1,55.5-27.9c0.1-1.6,0.2-3.2,0.3-4.8c0-5.3-0.7-10.5-2.1-15.4l0-1.2c-0.1,0-0.2,0.1-0.4,0.1C101.7,16.6,80.7,0.2,55.9,0C31-0.2,9.9,16,2.7,38.4c0,0,0,0,0,0v0C1,43.6,0,49.2,0,55"/>
<polyline clip-path="url(#svgid_2_c6)" fill="none" stroke="#26211B" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" points="74.4,35.1 66,43.4 78.5,43.4 	"/>
<polyline clip-path="url(#svgid_2_c6)" fill="none" stroke="#26211B" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" points="34.7,34.8 42.9,43.2 30.4,43.1 	"/>
<path clip-path="url(#svgid_2_c6)" fill="none" stroke="#26211B" stroke-width="4.173" stroke-linecap="round" stroke-linejoin="round" d="M72.1,68.6c0.1-12.5-8.2-16.7-16.6-16.8c-8.3-0.1-16.7,4.1-16.8,16.6"/>
</g>
</symbol>
<symbol id="svg-icon-loader" viewBox="0 0 120 30">
<circle cx="15" cy="15" r="15">
<animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" />
<animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" />
</circle>
<circle cx="60" cy="15" r="9" fill-opacity="0.3">
<animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite" />
<animate attributeName="fill-opacity" from="0.5" to="0.5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite" />
</circle>
<circle cx="105" cy="15" r="15">
<animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" />
<animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" />
</circle>
</symbol>
</defs>
</svg>