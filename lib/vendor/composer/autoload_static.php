<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3043aff3db8446d21c22f36f77adce25
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'C' => 
        array (
            'ColorThief\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'ColorThief\\' => 
        array (
            0 => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'ColorThief\\CMap' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/CMap.php',
        'ColorThief\\ColorThief' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/ColorThief.php',
        'ColorThief\\Image\\Adapter\\GDImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/GDImageAdapter.php',
        'ColorThief\\Image\\Adapter\\GmagickImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/GmagickImageAdapter.php',
        'ColorThief\\Image\\Adapter\\IImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/IImageAdapter.php',
        'ColorThief\\Image\\Adapter\\ImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/ImageAdapter.php',
        'ColorThief\\Image\\Adapter\\ImagickImageAdapter' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/Adapter/ImagickImageAdapter.php',
        'ColorThief\\Image\\ImageLoader' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/Image/ImageLoader.php',
        'ColorThief\\PQueue' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/PQueue.php',
        'ColorThief\\VBox' => __DIR__ . '/..' . '/ksubileau/color-thief-php/lib/ColorThief/VBox.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'League\\Flysystem\\AdapterInterface' => __DIR__ . '/..' . '/league/flysystem/src/AdapterInterface.php',
        'League\\Flysystem\\Adapter\\AbstractAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/AbstractAdapter.php',
        'League\\Flysystem\\Adapter\\AbstractFtpAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/AbstractFtpAdapter.php',
        'League\\Flysystem\\Adapter\\CanOverwriteFiles' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/CanOverwriteFiles.php',
        'League\\Flysystem\\Adapter\\Ftp' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Ftp.php',
        'League\\Flysystem\\Adapter\\Ftpd' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Ftpd.php',
        'League\\Flysystem\\Adapter\\Local' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Local.php',
        'League\\Flysystem\\Adapter\\NullAdapter' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/NullAdapter.php',
        'League\\Flysystem\\Adapter\\Polyfill\\NotSupportingVisibilityTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/NotSupportingVisibilityTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedCopyTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedCopyTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedReadingTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedReadingTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedTrait.php',
        'League\\Flysystem\\Adapter\\Polyfill\\StreamedWritingTrait' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/Polyfill/StreamedWritingTrait.php',
        'League\\Flysystem\\Adapter\\SynologyFtp' => __DIR__ . '/..' . '/league/flysystem/src/Adapter/SynologyFtp.php',
        'League\\Flysystem\\Config' => __DIR__ . '/..' . '/league/flysystem/src/Config.php',
        'League\\Flysystem\\ConfigAwareTrait' => __DIR__ . '/..' . '/league/flysystem/src/ConfigAwareTrait.php',
        'League\\Flysystem\\ConnectionErrorException' => __DIR__ . '/..' . '/league/flysystem/src/ConnectionErrorException.php',
        'League\\Flysystem\\ConnectionRuntimeException' => __DIR__ . '/..' . '/league/flysystem/src/ConnectionRuntimeException.php',
        'League\\Flysystem\\Directory' => __DIR__ . '/..' . '/league/flysystem/src/Directory.php',
        'League\\Flysystem\\Exception' => __DIR__ . '/..' . '/league/flysystem/src/Exception.php',
        'League\\Flysystem\\File' => __DIR__ . '/..' . '/league/flysystem/src/File.php',
        'League\\Flysystem\\FileExistsException' => __DIR__ . '/..' . '/league/flysystem/src/FileExistsException.php',
        'League\\Flysystem\\FileNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/FileNotFoundException.php',
        'League\\Flysystem\\Filesystem' => __DIR__ . '/..' . '/league/flysystem/src/Filesystem.php',
        'League\\Flysystem\\FilesystemException' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemException.php',
        'League\\Flysystem\\FilesystemInterface' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemInterface.php',
        'League\\Flysystem\\FilesystemNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/FilesystemNotFoundException.php',
        'League\\Flysystem\\Handler' => __DIR__ . '/..' . '/league/flysystem/src/Handler.php',
        'League\\Flysystem\\InvalidRootException' => __DIR__ . '/..' . '/league/flysystem/src/InvalidRootException.php',
        'League\\Flysystem\\MountManager' => __DIR__ . '/..' . '/league/flysystem/src/MountManager.php',
        'League\\Flysystem\\NotSupportedException' => __DIR__ . '/..' . '/league/flysystem/src/NotSupportedException.php',
        'League\\Flysystem\\PluginInterface' => __DIR__ . '/..' . '/league/flysystem/src/PluginInterface.php',
        'League\\Flysystem\\Plugin\\AbstractPlugin' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/AbstractPlugin.php',
        'League\\Flysystem\\Plugin\\EmptyDir' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/EmptyDir.php',
        'League\\Flysystem\\Plugin\\ForcedCopy' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ForcedCopy.php',
        'League\\Flysystem\\Plugin\\ForcedRename' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ForcedRename.php',
        'League\\Flysystem\\Plugin\\GetWithMetadata' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/GetWithMetadata.php',
        'League\\Flysystem\\Plugin\\ListFiles' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListFiles.php',
        'League\\Flysystem\\Plugin\\ListPaths' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListPaths.php',
        'League\\Flysystem\\Plugin\\ListWith' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/ListWith.php',
        'League\\Flysystem\\Plugin\\PluggableTrait' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/PluggableTrait.php',
        'League\\Flysystem\\Plugin\\PluginNotFoundException' => __DIR__ . '/..' . '/league/flysystem/src/Plugin/PluginNotFoundException.php',
        'League\\Flysystem\\ReadInterface' => __DIR__ . '/..' . '/league/flysystem/src/ReadInterface.php',
        'League\\Flysystem\\RootViolationException' => __DIR__ . '/..' . '/league/flysystem/src/RootViolationException.php',
        'League\\Flysystem\\SafeStorage' => __DIR__ . '/..' . '/league/flysystem/src/SafeStorage.php',
        'League\\Flysystem\\UnreadableFileException' => __DIR__ . '/..' . '/league/flysystem/src/UnreadableFileException.php',
        'League\\Flysystem\\Util' => __DIR__ . '/..' . '/league/flysystem/src/Util.php',
        'League\\Flysystem\\Util\\ContentListingFormatter' => __DIR__ . '/..' . '/league/flysystem/src/Util/ContentListingFormatter.php',
        'League\\Flysystem\\Util\\MimeType' => __DIR__ . '/..' . '/league/flysystem/src/Util/MimeType.php',
        'League\\Flysystem\\Util\\StreamHasher' => __DIR__ . '/..' . '/league/flysystem/src/Util/StreamHasher.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'Parsedown' => __DIR__ . '/..' . '/erusev/parsedown/Parsedown.php',
        'ParsedownExtra' => __DIR__ . '/..' . '/erusev/parsedown-extra/ParsedownExtra.php',
        'ParsedownExtraTest' => __DIR__ . '/..' . '/erusev/parsedown-extra/test/ParsedownExtraTest.php',
        'ZipStream\\Exception' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception.php',
        'ZipStream\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/FileNotFoundException.php',
        'ZipStream\\Exception\\FileNotReadableException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/FileNotReadableException.php',
        'ZipStream\\Exception\\InvalidOptionException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/InvalidOptionException.php',
        'ZipStream\\Exception\\StreamNotReadableException' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/Exception/StreamNotReadableException.php',
        'ZipStream\\ZipStream' => __DIR__ . '/..' . '/maennchen/zipstream-php/src/ZipStream.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3043aff3db8446d21c22f36f77adce25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3043aff3db8446d21c22f36f77adce25::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3043aff3db8446d21c22f36f77adce25::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3043aff3db8446d21c22f36f77adce25::$classMap;

        }, null, ClassLoader::class);
    }
}
