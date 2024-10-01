@echo off
echo Converting JPG files...
for %%i in (*.jpg) do (
    cwebp "%%i" -o "%%~ni.webp"
    echo Converted %%i to %%~ni.webp
)

echo Converting jpeg files...
for %%i in (*.jpeg) do (
    cwebp "%%i" -o "%%~ni.webp"
    echo Converted %%i to %%~ni.webp
)

echo Converting PNG files...
for %%i in (*.png) do (
    cwebp "%%i" -o "%%~ni.webp"
    echo Converted %%i to %%~ni.webp
)

echo Conversion complete.
