# VSCO REST API
An api service to be used to access content details.
## Getting Started
How can you use API service?
### cURL request
It is enough to post the image address using cURL.
### Usage Example (PHP)
```
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://api.iamtortue.com/vsco/"); // My API Service
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "uri=https://vsco.co/iamtortue/media/60d2c38c7de6c166e7000012"); // Our media link
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $server_output = curl_exec($ch);
  curl_close ($ch);
```
### Output Example (JSON)
```
{
    "status": "success",
    "result": {
        "name": "Tortue (:",
        "description": "",
        "profileLink": "vsco.co/iamtortue",
        "profile": "iamtortue",
        "mediaLink": "http://vsco.co/iamtortue/media/60d2c38c7de6c166e7000012",
        "shareLink": "http://vsco.co/iamtortue/media/60d2c38c7de6c166e7000012?share=MTYyNDQyNTM2Mg%3D%3D",
        "image": "im.vsco.co/aws-us-west-2/6f5144/156820385/60d2c38c7de6c166e7000012/vsco60d2c38f0c388.jpg",
        "imageMeta": {
            "aperture": 1.9,
            "copyright": "Copyright 2021. All rights reserved.",
            "flashMode": "Off, Did not fire",
            "iso": 100,
            "make": "Xiaomi",
            "model": "Mi Note 10 Lite",
            "shutterSpeed": "1/383",
            "whiteBalance": "Auto",
            "editStack": {
                "key": ""
            }
        },
        "width": 2048,
        "height": 1536
    }
}
```
### API Service
```
  https://api.iamtortue.com/vsco/
```

## Post Parameters

| Option               | Description                                                                                                   |
| -------------------- | ------------------------------------------------------------------------------------------------------------- |
| --uri                | The media link whose content you want to access.                                                              |

## JSON Output Keys

| Option               | Description                                                                                                   |
| -------------------- | ------------------------------------------------------------------------------------------------------------- |
| name                 | User profile name                                                                                             |
| description          | The media description.                                                                                        |
| profileLink          | User's profile address.                                                                                       |
| profile              | Username                                                                                                      |
| mediaLink            | The media link.                                                                                               |
| shareLink            | The media sharing link.                                                                                       |
| image                | The address of the photo. (Full HD / Original Image)                                                          |
| imageMeta            | { aperture, copyright, flashMode, iso, make, model, shutterSpeed, whiteBalance, editStack { key } }           |
| width                | The width of the picture.                                                                                     |
| height               | The height of the picture.                                                                                    |

## Author

- **Ayhan Alabay** - _Developer_ - [Website](https://www.iamtortue.com/)

## Request Limitation
There are currently no limitations.
