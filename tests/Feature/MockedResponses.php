<?php

namespace Tests\Feature;

class MockedResponses
{
    public static function getMockedResponseBody(): string
    {
        return <<<EOF
{
    "data": [
        {
            "type": "gif",
            "id": "3o6MbcY5l6MKcwywr6",
            "url": "https://giphy.com/gifs/thesimpsons-3o6MbcY5l6MKcwywr6",
            "slug": "thesimpsons-3o6MbcY5l6MKcwywr6",
            "bitly_gif_url": "http://gph.is/1TqqnHu",
            "bitly_url": "http://gph.is/1TqqnHu",
            "embed_url": "https://giphy.com/embed/3o6MbcY5l6MKcwywr6",
            "username": "",
            "source": "http://www.simpsonsworld.com",
            "title": "Season 18 Car GIF by The Simpsons",
            "rating": "pg-13",
            "content_url": "",
            "source_tld": "www.simpsonsworld.com",
            "source_post_url": "http://www.simpsonsworld.com",
            "is_sticker": 0,
            "import_datetime": "2016-05-05 23:23:12",
            "trending_datetime": "0000-00-00 00:00:00",
            "images": {
                "original": {
                    "height": "270",
                    "width": "480",
                    "size": "866423",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.gif&ct=g",
                    "mp4_size": "376588",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.mp4&ct=g",
                    "webp_size": "735198",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.webp&ct=g",
                    "frames": "42",
                    "hash": "c147ba6a541aafab387940457cf0119c"
                },
                "downsized": {
                    "height": "270",
                    "width": "480",
                    "size": "866423",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.gif&ct=g"
                },
                "downsized_large": {
                    "height": "270",
                    "width": "480",
                    "size": "866423",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.gif&ct=g"
                },
                "downsized_medium": {
                    "height": "270",
                    "width": "480",
                    "size": "866423",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.gif&ct=g"
                },
                "downsized_small": {
                    "height": "194",
                    "width": "344",
                    "mp4_size": "125491",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy-downsized-small.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy-downsized-small.mp4&ct=g"
                },
                "downsized_still": {
                    "height": "270",
                    "width": "480",
                    "size": "866423",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy_s.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy_s.gif&ct=g"
                },
                "fixed_height": {
                    "height": "200",
                    "width": "356",
                    "size": "517400",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200.gif&ct=g",
                    "mp4_size": "209693",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200.mp4&ct=g",
                    "webp_size": "492056",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200.webp&ct=g"
                },
                "fixed_height_downsampled": {
                    "height": "200",
                    "width": "356",
                    "size": "138773",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200_d.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200_d.gif&ct=g",
                    "webp_size": "106474",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200_d.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200_d.webp&ct=g"
                },
                "fixed_height_small": {
                    "height": "100",
                    "width": "178",
                    "size": "193834",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100.gif&ct=g",
                    "mp4_size": "78180",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100.mp4&ct=g",
                    "webp_size": "225606",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100.webp&ct=g"
                },
                "fixed_height_small_still": {
                    "height": "100",
                    "width": "178",
                    "size": "9197",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100_s.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100_s.gif&ct=g"
                },
                "fixed_height_still": {
                    "height": "200",
                    "width": "356",
                    "size": "24386",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200_s.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200_s.gif&ct=g"
                },
                "fixed_width": {
                    "height": "113",
                    "width": "200",
                    "size": "211274",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200w.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200w.gif&ct=g",
                    "mp4_size": "90253",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200w.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200w.mp4&ct=g",
                    "webp_size": "191100",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200w.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200w.webp&ct=g"
                },
                "fixed_width_downsampled": {
                    "height": "113",
                    "width": "200",
                    "size": "55960",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200w_d.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200w_d.gif&ct=g",
                    "webp_size": "44404",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200w_d.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200w_d.webp&ct=g"
                },
                "fixed_width_small": {
                    "height": "57",
                    "width": "100",
                    "size": "79568",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100w.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100w.gif&ct=g",
                    "mp4_size": "34817",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100w.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100w.mp4&ct=g",
                    "webp_size": "82846",
                    "webp": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100w.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100w.webp&ct=g"
                },
                "fixed_width_small_still": {
                    "height": "57",
                    "width": "100",
                    "size": "3973",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/100w_s.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=100w_s.gif&ct=g"
                },
                "fixed_width_still": {
                    "height": "113",
                    "width": "200",
                    "size": "11293",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/200w_s.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=200w_s.gif&ct=g"
                },
                "looping": {
                    "mp4_size": "1994929",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy-loop.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy-loop.mp4&ct=g"
                },
                "original_still": {
                    "height": "270",
                    "width": "480",
                    "size": "67185",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy_s.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy_s.gif&ct=g"
                },
                "original_mp4": {
                    "height": "270",
                    "width": "480",
                    "mp4_size": "376588",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy.mp4&ct=g"
                },
                "preview": {
                    "height": "146",
                    "width": "259",
                    "mp4_size": "37815",
                    "mp4": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy-preview.mp4?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy-preview.mp4&ct=g"
                },
                "preview_gif": {
                    "height": "74",
                    "width": "132",
                    "size": "48296",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy-preview.gif?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy-preview.gif&ct=g"
                },
                "preview_webp": {
                    "height": "92",
                    "width": "164",
                    "size": "41014",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/giphy-preview.webp?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=giphy-preview.webp&ct=g"
                },
                "480w_still": {
                    "height": "270",
                    "width": "480",
                    "size": "866423",
                    "url": "https://media0.giphy.com/media/3o6MbcY5l6MKcwywr6/480w_s.jpg?cid=a6a5e313u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8&rid=480w_s.jpg&ct=g"
                }
            },
            "analytics_response_payload": "e=Z2lmX2lkPTNvNk1iY1k1bDZNS2N3eXdyNiZldmVudF90eXBlPUdJRl9TRUFSQ0gmY2lkPWE2YTVlMzEzdTUzNW5nc3h2MWQwMDhvbzAzNGduMDNnenJ4Nm5naXI1eDJxZWN2OCZjdD1n",
            "analytics": {
                "onload": {
                    "url": "https://giphy-analytics.giphy.com/v2/pingback_simple?analytics_response_payload=e%3DZ2lmX2lkPTNvNk1iY1k1bDZNS2N3eXdyNiZldmVudF90eXBlPUdJRl9TRUFSQ0gmY2lkPWE2YTVlMzEzdTUzNW5nc3h2MWQwMDhvbzAzNGduMDNnenJ4Nm5naXI1eDJxZWN2OCZjdD1n&action_type=SEEN"
                },
                "onclick": {
                    "url": "https://giphy-analytics.giphy.com/v2/pingback_simple?analytics_response_payload=e%3DZ2lmX2lkPTNvNk1iY1k1bDZNS2N3eXdyNiZldmVudF90eXBlPUdJRl9TRUFSQ0gmY2lkPWE2YTVlMzEzdTUzNW5nc3h2MWQwMDhvbzAzNGduMDNnenJ4Nm5naXI1eDJxZWN2OCZjdD1n&action_type=CLICK"
                },
                "onsent": {
                    "url": "https://giphy-analytics.giphy.com/v2/pingback_simple?analytics_response_payload=e%3DZ2lmX2lkPTNvNk1iY1k1bDZNS2N3eXdyNiZldmVudF90eXBlPUdJRl9TRUFSQ0gmY2lkPWE2YTVlMzEzdTUzNW5nc3h2MWQwMDhvbzAzNGduMDNnenJ4Nm5naXI1eDJxZWN2OCZjdD1n&action_type=SENT"
                }
            }
        }
    ],
    "pagination": {
        "total_count": 100613,
        "count": 1,
        "offset": 4999
    },
    "meta": {
        "status": 200,
        "msg": "OK",
        "response_id": "u535ngsxv1d008oo034gn03gzrx6ngir5x2qecv8"
    }
}
EOF;
    }

    public static function getMockedResponseBodyNoResults(): string
    {
        return <<<EOL
{
    "data": [],
    "pagination": {
        "total_count": 0,
        "count": 0,
        "offset": 4999
    },
    "meta": {
        "status": 200,
        "msg": "OK",
        "response_id": "y64wyiuti5tkvcnm1c9jbjzpibnkibrk07dsdsmj"
    }
}
EOL;

    }
}
