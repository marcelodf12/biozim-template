skel.init({
	prefix: window._templateDirectory + '/css/style',
	resetCSS: true,
	boxModel: 'border',
	grid: {
		gutters: 50
	},
	breakpoints: {
		'mobile': {
			range: '-719',
			lockViewport: true,
			containers: 'fluid',
			grid: {
				collapse: true,
				gutters: 10
			}
		},
		'desktop': {
			range: '720-',
			containers: 720
		}
	}
}, {
	panels: {
		panels: {
			navPanel: {
				breakpoints: 'mobile',
				position: 'left',
				style: 'reveal',
				size: '80%',
				html: '<div data-action="navList" data-args="nav"></div>'
			}
		},
		overlays: {
			titleBar: {
				breakpoints: 'mobile',
				position: 'top-left',
				height: 44,
				width: '100%',
				html: '<span class="toggle" data-action="togglePanel" data-args="navPanel"></span><span class="title" data-action="copyHTML" data-args="logo"></span>'
			}
		}
	}
	
	
});