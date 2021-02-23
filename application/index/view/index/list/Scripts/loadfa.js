function asyncScript(A, B) {
	if (typeof A == "function") {
		var B = A,
		A = null
	}
	if (A) {
		if (typeof A != "string") {
			return
		}
		var x = document.createElement('script');
		x.type = 'text/javascript';
		x.async = true;
		x.src = A;
		var s = document.getElementsByTagName('head')[0];
		s.appendChild(x);
		if (B) {
			if (typeof B != "function") {
				return
			}
			if (!
			/*@cc_on!@*/
			0) {
				x.onload = function() {
					B()
				}
			} else {
				x.onreadystatechange = function() {
					if (x.readyState == 'loaded' || x.readyState == 'complete') {
						B()
					}
				}
			}
		}
	} else {
		if (!B) {
			return
		}
		setTimeout(function() {
			B()
		},
		0)
	}
};

function getRandomObj(A, R) {
	var x = 0;
	for (var i = 0; i < A.length; i++) {
		x += R[i] || 1;
		if (!R[i]) R.push(1)
	}
	var y = Math.ceil(Math.random() * x),
	z = [],
	m = [];
	for (var i = 1; i < x + 1; i++) {
		z.push(i)
	}
	for (var i = 0; i < A.length; i++) {
		m[i] = z.slice(0, R[i]);
		z.splice(0, R[i])
	}
	for (var i = 0; i < m.length; i++) {
		for (var j = 0; j < m[i].length; j++) {
			if (y == m[i][j]) {
				return A[i]
			}
		}
	}
}
function setRandomAds(A, R, O, flag) {
	var obj = getRandomObj(A, R),
	ele = document.getElementById(O),
	img;
	if (!obj) {
		return
	}
	if (flag && screen.width >= 1280) {
		obj.width = obj.width2;
		obj.url = obj.url2
	} else {
		obj.width = obj.width;
		obj.url = obj.url
	}
	img = "<a href='" + obj.link + "' target='_blank'><img width='" + obj.width + "' height='" + obj.height + "' alt='" + obj.alt + "' app='image:poster' src='" + obj.url + "' /></a>";
	if (ele) ele.innerHTML = img
}

;(function(){var ads=[{width:210,width2:0,height:261,url:"//img11.360buyimg.com/da/g15/M06/06/0B/rBEhWVMEFjIIAAAAAACPopX8tDQAAIstwP-Ku0AAI-6349.jpg",url2:"",alt:"6月值得购买的手机",link:"https://ccc-x.jd.com/dsp/cpd?ext=aHR0cHM6Ly95dXNob3UuamQuY29tL3Nob3VqaS5odG1s&log=JF5rMUAKXlLMuE_-1qw2RKwu9W82n03RnztIpYfC-NVWZuaHLhAWyfY2fGI8hkyp2dVqWu5yLApYqArxAsv_RrxRfbcb8Z7s1ZWpY37WrUmS4vUdw2Qs2i9sm7NEko0EIL8sdNlIsEggdgTqE4eOY8-1CGacYmIWS3yR-BlJWw2MkSWd5gJrCB8YItL2tTCGw5nQTadbvr39K8x4U_J764FQ866bukh5iBEE2QJCJqMQt3m1nrVRRy0NfFoVvynagNkfCoGmajtgE8nL1bkt8_t64fTpHs6pwRKC8gfuILk7QUl2hjLu-U9p6k5cuf0kSO9FgaUyfSBHeVkSWgP0VeETsS4HiFnbzWcRTcRemTU5COAcvoo4wDX_PQD1PyS8tbOt_QsL-lu2g_WcYQsnR4gG_N88vKGYNmvQ_sG0yqQMMBNrgq7Cr5LZDtu8Letsx5SAnhqzCNJm4gNiOoNV1-Sg6AOejyFyrQ8r8oqeRDwLkTUkNasslPdoJXQgnzhgZCnlnJWHmOmuzs2cu_4XudMhH6sUEOL_hKjANr1PfdFJ-AJ3LzSwTnlKSb07WUYtA3FBe2HIkdOpsPhoB9dhkw01DoCSgRhsOesmYN8HSVXRDQGEmsLHsvhNqAHfGT8mQ9oOi8NZEfl_ES9U11c28Qk5CpAAds7Aam0HzlA4bZa5_UUr6m_xzUwNZuyJyVUU"}];var rate=[1];asyncScript(function(){setRandomAds(ads,rate,"da211x261-1",false);})})();