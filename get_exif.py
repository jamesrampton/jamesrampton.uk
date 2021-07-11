#!/usr/bin/env python
# -*- coding: utf-8 -*-
import subprocess

infoDict = {}
imgPath = './content/gallery/img/_MG_0052.jpeg'

EXIF_TAGS = [
    'Camera Model Name',
    'Lens ID',
    'F Number',
    'Focal Length',
    'Exposure Time',
    'ISO',
]

''' use Exif tool to get the metadata '''
process = subprocess.Popen(
    ['exiftool', imgPath],
    stdout=subprocess.PIPE,
    stderr=subprocess.STDOUT,
    universal_newlines=True
)

''' get the tags in dict '''
for tag in process.stdout:
    line = tag.strip().split(':', 1)
    key = line[0].strip()
    prefix = ''
    if key in EXIF_TAGS:
        if key == 'F Number':
            prefix = "ƒ/"
        infoDict[key] = f"{prefix}{line[-1].split('(')[0].strip()}"

for k, v in infoDict.items():
    print(k, ':', v)
