<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/annotation_payload.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class AnnotationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Detection::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Tables::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextExtraction::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextSentiment::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Translation::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a900a0a34676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f616e6e6f746174696f6e5f7061796c6f61642e70726f746f121b676f6f676c652e636c6f75642e6175746f6d6c2e763162657461311a2b676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f646574656374696f6e2e70726f746f1a28676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f7461626c65732e70726f746f1a31676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f746578745f65787472616374696f6e2e70726f746f1a30676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f746578745f73656e74696d656e742e70726f746f1a2d676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f7472616e736c6174696f6e2e70726f746f1a19676f6f676c652f70726f746f6275662f616e792e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22e6050a11416e6e6f746174696f6e5061796c6f616412490a0b7472616e736c6174696f6e18022001280b32322e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5472616e736c6174696f6e416e6e6f746174696f6e4800124f0a0e636c617373696669636174696f6e18032001280b32352e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436c617373696669636174696f6e416e6e6f746174696f6e4800125d0a16696d6167655f6f626a6563745f646574656374696f6e18042001280b323b2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496d6167654f626a656374446574656374696f6e416e6e6f746174696f6e4800125a0a14766964656f5f636c617373696669636174696f6e18092001280b323a2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e566964656f436c617373696669636174696f6e416e6e6f746174696f6e4800125b0a15766964656f5f6f626a6563745f747261636b696e6718082001280b323a2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e566964656f4f626a656374547261636b696e67416e6e6f746174696f6e480012500a0f746578745f65787472616374696f6e18062001280b32352e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5465787445787472616374696f6e416e6e6f746174696f6e4800124e0a0e746578745f73656e74696d656e7418072001280b32342e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5465787453656e74696d656e74416e6e6f746174696f6e4800123f0a067461626c6573180a2001280b322d2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5461626c6573416e6e6f746174696f6e4800121a0a12616e6e6f746174696f6e5f737065635f696418012001280912140a0c646973706c61795f6e616d6518052001280942080a0664657461696c42a5010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e7631626574613150015a41676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c436c6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
