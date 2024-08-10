## this is a complete json for custom properties in the theme
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 2,
    "settings": {
        "appearanceTools": true,
        "layout": {
            "contentSize": "800px",
            "wideSize": "1100px"
        },
        "color": {
            "palette": [
                {
                    "name": "Black",
                    "slug": "black",
                    "color": "#000000"
                },
                {
                    "name": "White",
                    "slug": "white",
                    "color": "#ffffff"
                },
                {
                    "name": "Gray",
                    "slug": "gray",
                    "color": "#f9f9f9"
                },
                {
                    "name": "Red",
                    "slug": "red",
                    "color": "#ff0000"
                },
                {
                    "name": "Green",
                    "slug": "green",
                    "color": "#00ff00"
                },
                {
                    "name": "Blue",
                    "slug": "blue",
                    "color": "#0000ff"
                }
            ],
            "gradients": [
                {
                    "name": "Red to Blue",
                    "slug": "red-to-blue",
                    "gradient": "linear-gradient(45deg, #ff0000, #0000ff)"
                }
            ],
            "custom": false,
            "link": true
        },
        "typography": {
            "fontFamilies": [
                {
                    "fontFamily": "'Open Sans', sans-serif",
                    "slug": "open-sans",
                    "name": "Open Sans"
                },
                {
                    "fontFamily": "'Roboto', sans-serif",
                    "slug": "roboto",
                    "name": "Roboto"
                }
            ],
            "fontSizes": [
                {
                    "name": "Small",
                    "slug": "small",
                    "size": "12px"
                },
                {
                    "name": "Normal",
                    "slug": "normal",
                    "size": "16px"
                },
                {
                    "name": "Large",
                    "slug": "large",
                    "size": "24px"
                }
            ],
            "customFontSize": true,
            "lineHeight": true,
            "textTransform": true,
            "letterSpacing": true,
            "fontStyle": true,
            "fontWeight": true,
            "dropCap": true
        },
        "spacing": {
            "customPadding": true,
            "customMargin": true,
            "units": ["px", "%", "em", "rem", "vw", "vh"],
            "blockGap": true
        },
        "blocks": {
            "core/paragraph": {
                "settings": {
                    "typography": {
                        "fontSizes": [
                            {
                                "name": "Small",
                                "slug": "small",
                                "size": "14px"
                            }
                        ]
                    }
                },
                "styles": {
                    "color": {
                        "background": "#f0f0f0",
                        "text": "#333333"
                    },
                    "typography": {
                        "fontFamily": "Open Sans, sans-serif",
                        "fontSize": "14px"
                    },
                    "spacing": {
                        "padding": "10px"
                    }
                }
            }
        },
        "theme": {
            "customBackground": true,
            "customHeader": true,
            "customLogo": true,
            "customMenu": true,
            "customColors": true,
            "customGradient": true
        },
        "styles": {
            "color": {
                "background": "#ffffff",
                "text": "#000000",
                "link": "#1e73be"
            },
            "typography": {
                "fontFamily": "Open Sans, sans-serif",
                "fontSize": "16px",
                "lineHeight": "1.5",
                "textTransform": "none",
                "letterSpacing": "normal",
                "fontWeight": "400",
                "fontStyle": "normal"
            },
            "spacing": {
                "padding": "20px",
                "margin": "0 auto",
                "blockGap": "20px"
            },
            "blocks": {
                "core/button": {
                    "color": {
                        "background": "#0073aa",
                        "text": "#ffffff"
                    },
                    "typography": {
                        "fontSize": "14px",
                        "fontWeight": "600"
                    },
                    "spacing": {
                        "padding": "10px 20px"
                    }
                }
            },
            "elements": {
                "link": {
                    "color": {
                        "text": "#ff0000"
                    }
                },
                "button": {
                    "color": {
                        "background": "#0000ff",
                        "text": "#ffffff"
                    }
                }
            }
        },
        "custom": {
            "spacing": {
                "padding": {
                    "small": "8px",
                    "medium": "16px",
                    "large": "32px"
                }
            }
        },
        "media": {
            "breakpoints": {
                "small": "600px",
                "medium": "768px",
                "large": "1024px"
            }
        }
    }
}
