<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpertationsAdvanced
 *
 * @ORM\Table(name="expertations_advanced")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpertationsAdvancedRepository")
 */
class ExpertationsAdvanced
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="father", type="integer", nullable=true)
     */
    private $father;

    /**
     * @var string
     *
     * @ORM\Column(name="val1", type="simple_array", nullable=true)
     */
    private $val1;

    /**
     * @var string
     *
     * @ORM\Column(name="val2", type="simple_array", nullable=true)
     */
    private $val2;

    /**
     * @var string
     *
     * @ORM\Column(name="val3", type="simple_array", nullable=true)
     */
    private $val3;

    /**
     * @var string
     *
     * @ORM\Column(name="val4", type="simple_array", nullable=true)
     */
    private $val4;

    /**
     * @var string
     *
     * @ORM\Column(name="val5", type="simple_array", nullable=true)
     */
    private $val5;

    /**
     * @var string
     *
     * @ORM\Column(name="val6", type="simple_array", nullable=true)
     */
    private $val6;

    /**
     * @var string
     *
     * @ORM\Column(name="val7", type="simple_array", nullable=true)
     */
    private $val7;

    /**
     * @var string
     *
     * @ORM\Column(name="val8", type="simple_array", nullable=true)
     */
    private $val8;

    /**
     * @var string
     *
     * @ORM\Column(name="val9", type="simple_array", nullable=true)
     */
    private $val9;

    /**
     * @var string
     *
     * @ORM\Column(name="val10", type="simple_array", nullable=true)
     */
    private $val10;

    /**
     * @var string
     *
     * @ORM\Column(name="val11", type="simple_array", nullable=true)
     */
    private $val11;

    /**
     * @var string
     *
     * @ORM\Column(name="val12", type="simple_array", nullable=true)
     */
    private $val12;

    /**
     * @var string
     *
     * @ORM\Column(name="val13", type="simple_array", nullable=true)
     */
    private $val13;

    /**
     * @var string
     *
     * @ORM\Column(name="val14", type="simple_array", nullable=true)
     */
    private $val14;

    /**
     * @var string
     *
     * @ORM\Column(name="val15", type="simple_array", nullable=true)
     */
    private $val15;

    /**
     * @var string
     *
     * @ORM\Column(name="val16", type="simple_array", nullable=true)
     */
    private $val16;

    /**
     * @var string
     *
     * @ORM\Column(name="val17", type="simple_array", nullable=true)
     */
    private $val17;

    /**
     * @var string
     *
     * @ORM\Column(name="val18", type="simple_array", nullable=true)
     */
    private $val18;

    /**
     * @var string
     *
     * @ORM\Column(name="val19", type="simple_array", nullable=true)
     */
    private $val19;

    /**
     * @var string
     *
     * @ORM\Column(name="val20", type="simple_array", nullable=true)
     */
    private $val20;

    /**
     * @var string
     *
     * @ORM\Column(name="val21", type="simple_array", nullable=true)
     */
    private $val21;

    /**
     * @var string
     *
     * @ORM\Column(name="val22", type="simple_array", nullable=true)
     */
    private $val22;

    /**
     * @var string
     *
     * @ORM\Column(name="val23", type="simple_array", nullable=true)
     */
    private $val23;

    /**
     * @var string
     *
     * @ORM\Column(name="val24", type="simple_array", nullable=true)
     */
    private $val24;

    /**
     * @var string
     *
     * @ORM\Column(name="val25", type="simple_array", nullable=true)
     */
    private $val25;

    /**
     * @var string
     *
     * @ORM\Column(name="val26", type="simple_array", nullable=true)
     */
    private $val26;

    /**
     * @var string
     *
     * @ORM\Column(name="val27", type="simple_array", nullable=true)
     */
    private $val27;

    /**
     * @var string
     *
     * @ORM\Column(name="val28", type="simple_array", nullable=true)
     */
    private $val28;

    /**
     * @var string
     *
     * @ORM\Column(name="val29", type="simple_array", nullable=true)
     */
    private $val29;

    /**
     * @var string
     *
     * @ORM\Column(name="val30", type="simple_array", nullable=true)
     */
    private $val30;

    /**
     * @var string
     *
     * @ORM\Column(name="val31", type="simple_array", nullable=true)
     */
    private $val31;

    /**
     * @var string
     *
     * @ORM\Column(name="val32", type="simple_array", nullable=true)
     */
    private $val32;

    /**
     * @var string
     *
     * @ORM\Column(name="val33", type="simple_array", nullable=true)
     */
    private $val33;

    /**
     * @var string
     *
     * @ORM\Column(name="val34", type="simple_array", nullable=true)
     */
    private $val34;

    /**
     * @var string
     *
     * @ORM\Column(name="val35", type="simple_array", nullable=true)
     */
    private $val35;

    /**
     * @var string
     *
     * @ORM\Column(name="val36", type="simple_array", nullable=true)
     */
    private $val36;

    /**
     * @var string
     *
     * @ORM\Column(name="val37", type="simple_array", nullable=true)
     */
    private $val37;

    /**
     * @var string
     *
     * @ORM\Column(name="val38", type="simple_array", nullable=true)
     */
    private $val38;

    /**
     * @var string
     *
     * @ORM\Column(name="val39", type="simple_array", nullable=true)
     */
    private $val39;

    /**
     * @var string
     *
     * @ORM\Column(name="val40", type="simple_array", nullable=true)
     */
    private $val40;

    /**
     * @var string
     *
     * @ORM\Column(name="val41", type="simple_array", nullable=true)
     */
    private $val41;

    /**
     * @var string
     *
     * @ORM\Column(name="val42", type="simple_array", nullable=true)
     */
    private $val42;

    /**
     * @var string
     *
     * @ORM\Column(name="val43", type="simple_array", nullable=true)
     */
    private $val43;

    /**
     * @var string
     *
     * @ORM\Column(name="val44", type="simple_array", nullable=true)
     */
    private $val44;

    /**
     * @var string
     *
     * @ORM\Column(name="val45", type="simple_array", nullable=true)
     */
    private $val45;

    /**
     * @var string
     *
     * @ORM\Column(name="val46", type="simple_array", nullable=true)
     */
    private $val46;

    /**
     * @var string
     *
     * @ORM\Column(name="val47", type="simple_array", nullable=true)
     */
    private $val47;

    /**
     * @var string
     *
     * @ORM\Column(name="val48", type="simple_array", nullable=true)
     */
    private $val48;

    /**
     * @var string
     *
     * @ORM\Column(name="val49", type="simple_array", nullable=true)
     */
    private $val49;

    /**
     * @var string
     *
     * @ORM\Column(name="val50", type="simple_array", nullable=true)
     */
    private $val50;

    /**
     * @var string
     *
     * @ORM\Column(name="val51", type="simple_array", nullable=true)
     */
    private $val51;

    /**
     * @var string
     *
     * @ORM\Column(name="val52", type="simple_array", nullable=true)
     */
    private $val52;

    /**
     * @var string
     *
     * @ORM\Column(name="val53", type="simple_array", nullable=true)
     */
    private $val53;

    /**
     * @var string
     *
     * @ORM\Column(name="val54", type="simple_array", nullable=true)
     */
    private $val54;

    /**
     * @var string
     *
     * @ORM\Column(name="val55", type="simple_array", nullable=true)
     */
    private $val55;

    /**
     * @var string
     *
     * @ORM\Column(name="val56", type="simple_array", nullable=true)
     */
    private $val56;

    /**
     * @var string
     *
     * @ORM\Column(name="val57", type="simple_array", nullable=true)
     */
    private $val57;

    /**
     * @var string
     *
     * @ORM\Column(name="val58", type="simple_array", nullable=true)
     */
    private $val58;

    /**
     * @var string
     *
     * @ORM\Column(name="val59", type="simple_array", nullable=true)
     */
    private $val59;

    /**
     * @var string
     *
     * @ORM\Column(name="val60", type="simple_array", nullable=true)
     */
    private $val60;

    /**
     * @var string
     *
     * @ORM\Column(name="val61", type="simple_array", nullable=true)
     */
    private $val61;

    /**
     * @var string
     *
     * @ORM\Column(name="val62", type="simple_array", nullable=true)
     */
    private $val62;

    /**
     * @var string
     *
     * @ORM\Column(name="val63", type="simple_array", nullable=true)
     */
    private $val63;

    /**
     * @var string
     *
     * @ORM\Column(name="val64", type="simple_array", nullable=true)
     */
    private $val64;

    /**
     * @var string
     *
     * @ORM\Column(name="val65", type="simple_array", nullable=true)
     */
    private $val65;

    /**
     * @var integer
     *
     * @ORM\Column(name="father_floor", type="integer", nullable=true)
     */
    private $fatherFloor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt1_enabled", type="boolean", nullable=true)
     */
    private $opt1Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt1_1_value", type="integer", nullable=true)
     */
    private $opt1_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt1_2_value", type="integer", nullable=true)
     */
    private $opt1_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt1_3_value", type="integer", nullable=true)
     */
    private $opt1_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt1_4_value", type="integer", nullable=true)
     */
    private $opt1_4Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt2_enabled", type="boolean", nullable=true)
     */
    private $opt2Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt2_1_value", type="integer", nullable=true)
     */
    private $opt2_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt2_2_value", type="integer", nullable=true)
     */
    private $opt2_2Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt3_enabled", type="boolean", nullable=true)
     */
    private $opt3Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_1_value", type="integer", nullable=true)
     */
    private $opt3_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_2_value", type="integer", nullable=true)
     */
    private $opt3_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_3_value", type="integer", nullable=true)
     */
    private $opt3_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_4_value", type="integer", nullable=true)
     */
    private $opt3_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_5_value", type="integer", nullable=true)
     */
    private $opt3_5Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_6_value", type="integer", nullable=true)
     */
    private $opt3_6Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_7_value", type="integer", nullable=true)
     */
    private $opt3_7Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_8_value", type="integer", nullable=true)
     */
    private $opt3_8Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt3_9_value", type="integer", nullable=true)
     */
    private $opt3_9Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt4_enabled", type="boolean", nullable=true)
     */
    private $opt4Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt4_1_value", type="integer", nullable=true)
     */
    private $opt4_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt4_2_value", type="integer", nullable=true)
     */
    private $opt4_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt4_3_value", type="integer", nullable=true)
     */
    private $opt4_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt5_enabled", type="boolean", nullable=true)
     */
    private $opt5Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt5_1_value", type="integer", nullable=true)
     */
    private $opt5_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt5_2_value", type="integer", nullable=true)
     */
    private $opt5_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt5_3_value", type="integer", nullable=true)
     */
    private $opt5_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt6_enabled", type="boolean", nullable=true)
     */
    private $opt6Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt6_1_value", type="integer", nullable=true)
     */
    private $opt6_1Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt7_enabled", type="boolean", nullable=true)
     */
    private $opt7Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt7_1_value", type="integer", nullable=true)
     */
    private $opt7_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt7_2_value", type="integer", nullable=true)
     */
    private $opt7_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt7_3_value", type="integer", nullable=true)
     */
    private $opt7_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt8_enabled", type="boolean", nullable=true)
     */
    private $opt8Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt8_1_value", type="integer", nullable=true)
     */
    private $opt8_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt8_2_value", type="integer", nullable=true)
     */
    private $opt8_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt8_3_value", type="integer", nullable=true)
     */
    private $opt8_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt9_enabled", type="boolean", nullable=true)
     */
    private $opt9Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt9_1_value", type="integer", nullable=true)
     */
    private $opt9_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt9_2_value", type="integer", nullable=true)
     */
    private $opt9_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt9_3_value", type="integer", nullable=true)
     */
    private $opt9_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt10_enabled", type="boolean", nullable=true)
     */
    private $opt10Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_1_value", type="integer", nullable=true)
     */
    private $opt10_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_2_value", type="integer", nullable=true)
     */
    private $opt10_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_3_value", type="integer", nullable=true)
     */
    private $opt10_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_4_value", type="integer", nullable=true)
     */
    private $opt10_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_5_value", type="integer", nullable=true)
     */
    private $opt10_5Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_6_value", type="integer", nullable=true)
     */
    private $opt10_6Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_7_value", type="integer", nullable=true)
     */
    private $opt10_7Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_8_value", type="integer", nullable=true)
     */
    private $opt10_8Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt10_9_value", type="integer", nullable=true)
     */
    private $opt10_9Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt11_enabled", type="boolean", nullable=true)
     */
    private $opt11Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt11_1_value", type="integer", nullable=true)
     */
    private $opt11_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt11_2_value", type="integer", nullable=true)
     */
    private $opt11_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt11_3_value", type="integer", nullable=true)
     */
    private $opt11_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt11_4_value", type="integer", nullable=true)
     */
    private $opt11_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt11_5_value", type="integer", nullable=true)
     */
    private $opt11_5Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt12_enabled", type="boolean", nullable=true)
     */
    private $opt12Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt12_1_value", type="integer", nullable=true)
     */
    private $opt12_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt12_2_value", type="integer", nullable=true)
     */
    private $opt12_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt12_3_value", type="integer", nullable=true)
     */
    private $opt12_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt13_enabled", type="boolean", nullable=true)
     */
    private $opt13Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt13_1_value", type="integer", nullable=true)
     */
    private $opt13_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt13_2_value", type="integer", nullable=true)
     */
    private $opt13_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt13_3_value", type="integer", nullable=true)
     */
    private $opt13_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt13_4_value", type="integer", nullable=true)
     */
    private $opt13_4Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt14_enabled", type="boolean", nullable=true)
     */
    private $opt14Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt14_1_value", type="integer", nullable=true)
     */
    private $opt14_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt14_2_value", type="integer", nullable=true)
     */
    private $opt14_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt14_3_value", type="integer", nullable=true)
     */
    private $opt14_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt14_4_value", type="integer", nullable=true)
     */
    private $opt14_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt14_5_value", type="integer", nullable=true)
     */
    private $opt14_5Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt14_6_value", type="integer", nullable=true)
     */
    private $opt14_6Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt15_enabled", type="boolean", nullable=true)
     */
    private $opt15Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_1_value", type="integer", nullable=true)
     */
    private $opt15_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_2_value", type="integer", nullable=true)
     */
    private $opt15_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_3_value", type="integer", nullable=true)
     */
    private $opt15_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_4_value", type="integer", nullable=true)
     */
    private $opt15_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_5_value", type="integer", nullable=true)
     */
    private $opt15_5Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_6_value", type="integer", nullable=true)
     */
    private $opt15_6Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt15_7_value", type="integer", nullable=true)
     */
    private $opt15_7Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt16_enabled", type="boolean", nullable=true)
     */
    private $opt16Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt16_1_value", type="integer", nullable=true)
     */
    private $opt16_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt16_2_value", type="integer", nullable=true)
     */
    private $opt16_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt16_3_value", type="integer", nullable=true)
     */
    private $opt16_3Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt17_enabled", type="boolean", nullable=true)
     */
    private $opt17Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt17_1_value", type="integer", nullable=true)
     */
    private $opt17_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt17_2_value", type="integer", nullable=true)
     */
    private $opt17_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt17_3_value", type="integer", nullable=true)
     */
    private $opt17_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt17_4_value", type="integer", nullable=true)
     */
    private $opt17_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt17_5_value", type="integer", nullable=true)
     */
    private $opt17_5Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt17_6_value", type="integer", nullable=true)
     */
    private $opt17_6Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt18_enabled", type="boolean", nullable=true)
     */
    private $opt18Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt18_1_value", type="integer", nullable=true)
     */
    private $opt18_1Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt19_enabled", type="boolean", nullable=true)
     */
    private $opt19Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt19_1_value", type="integer", nullable=true)
     */
    private $opt19_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt19_2_value", type="integer", nullable=true)
     */
    private $opt19_2Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt20_enabled", type="boolean", nullable=true)
     */
    private $opt20Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt20_1_value", type="integer", nullable=true)
     */
    private $opt20_1Value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt21_enabled", type="boolean", nullable=true)
     */
    private $opt21Enabled;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_1_value", type="integer", nullable=true)
     */
    private $opt21_1Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_2_value", type="integer", nullable=true)
     */
    private $opt21_2Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_3_value", type="integer", nullable=true)
     */
    private $opt21_3Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_4_value", type="integer", nullable=true)
     */
    private $opt21_4Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_5_value", type="integer", nullable=true)
     */
    private $opt21_5Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_6_value", type="integer", nullable=true)
     */
    private $opt21_6Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_7_value", type="integer", nullable=true)
     */
    private $opt21_7Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_8_value", type="integer", nullable=true)
     */
    private $opt21_8Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_9_value", type="integer", nullable=true)
     */
    private $opt21_9Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_10_value", type="integer", nullable=true)
     */
    private $opt21_10Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_11_value", type="integer", nullable=true)
     */
    private $opt21_11Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_12_value", type="integer", nullable=true)
     */
    private $opt21_12Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_13_value", type="integer", nullable=true)
     */
    private $opt21_13Value;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt21_14_value", type="integer", nullable=true)
     */
    private $opt21_14Value;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set father.
     *
     * @param int|null $father
     *
     * @return ExpertationsAdvanced
     */
    public function setFather($father = null)
    {
        $this->father = $father;

        return $this;
    }

    /**
     * Get father.
     *
     * @return int|null
     */
    public function getFather()
    {
        return $this->father;
    }

    /**
     * Set val1.
     *
     * @param array|null $val1
     *
     * @return ExpertationsAdvanced
     */
    public function setVal1($val1 = null)
    {
        $this->val1 = $val1;

        return $this;
    }

    /**
     * Get val1.
     *
     * @return array|null
     */
    public function getVal1()
    {
        return $this->val1;
    }

    /**
     * Set val2.
     *
     * @param array|null $val2
     *
     * @return ExpertationsAdvanced
     */
    public function setVal2($val2 = null)
    {
        $this->val2 = $val2;

        return $this;
    }

    /**
     * Get val2.
     *
     * @return array|null
     */
    public function getVal2()
    {
        return $this->val2;
    }

    /**
     * Set val3.
     *
     * @param array|null $val3
     *
     * @return ExpertationsAdvanced
     */
    public function setVal3($val3 = null)
    {
        $this->val3 = $val3;

        return $this;
    }

    /**
     * Get val3.
     *
     * @return array|null
     */
    public function getVal3()
    {
        return $this->val3;
    }

    /**
     * Set val4.
     *
     * @param array|null $val4
     *
     * @return ExpertationsAdvanced
     */
    public function setVal4($val4 = null)
    {
        $this->val4 = $val4;

        return $this;
    }

    /**
     * Get val4.
     *
     * @return array|null
     */
    public function getVal4()
    {
        return $this->val4;
    }

    /**
     * Set val5.
     *
     * @param array|null $val5
     *
     * @return ExpertationsAdvanced
     */
    public function setVal5($val5 = null)
    {
        $this->val5 = $val5;

        return $this;
    }

    /**
     * Get val5.
     *
     * @return array|null
     */
    public function getVal5()
    {
        return $this->val5;
    }

    /**
     * Set val6.
     *
     * @param array|null $val6
     *
     * @return ExpertationsAdvanced
     */
    public function setVal6($val6 = null)
    {
        $this->val6 = $val6;

        return $this;
    }

    /**
     * Get val6.
     *
     * @return array|null
     */
    public function getVal6()
    {
        return $this->val6;
    }

    /**
     * Set val7.
     *
     * @param array|null $val7
     *
     * @return ExpertationsAdvanced
     */
    public function setVal7($val7 = null)
    {
        $this->val7 = $val7;

        return $this;
    }

    /**
     * Get val7.
     *
     * @return array|null
     */
    public function getVal7()
    {
        return $this->val7;
    }

    /**
     * Set val8.
     *
     * @param array|null $val8
     *
     * @return ExpertationsAdvanced
     */
    public function setVal8($val8 = null)
    {
        $this->val8 = $val8;

        return $this;
    }

    /**
     * Get val8.
     *
     * @return array|null
     */
    public function getVal8()
    {
        return $this->val8;
    }

    /**
     * Set val9.
     *
     * @param array|null $val9
     *
     * @return ExpertationsAdvanced
     */
    public function setVal9($val9 = null)
    {
        $this->val9 = $val9;

        return $this;
    }

    /**
     * Get val9.
     *
     * @return array|null
     */
    public function getVal9()
    {
        return $this->val9;
    }

    /**
     * Set val10.
     *
     * @param array|null $val10
     *
     * @return ExpertationsAdvanced
     */
    public function setVal10($val10 = null)
    {
        $this->val10 = $val10;

        return $this;
    }

    /**
     * Get val10.
     *
     * @return array|null
     */
    public function getVal10()
    {
        return $this->val10;
    }

    /**
     * Set val11.
     *
     * @param array|null $val11
     *
     * @return ExpertationsAdvanced
     */
    public function setVal11($val11 = null)
    {
        $this->val11 = $val11;

        return $this;
    }

    /**
     * Get val11.
     *
     * @return array|null
     */
    public function getVal11()
    {
        return $this->val11;
    }

    /**
     * Set val12.
     *
     * @param array|null $val12
     *
     * @return ExpertationsAdvanced
     */
    public function setVal12($val12 = null)
    {
        $this->val12 = $val12;

        return $this;
    }

    /**
     * Get val12.
     *
     * @return array|null
     */
    public function getVal12()
    {
        return $this->val12;
    }

    /**
     * Set val13.
     *
     * @param array|null $val13
     *
     * @return ExpertationsAdvanced
     */
    public function setVal13($val13 = null)
    {
        $this->val13 = $val13;

        return $this;
    }

    /**
     * Get val13.
     *
     * @return array|null
     */
    public function getVal13()
    {
        return $this->val13;
    }

    /**
     * Set val14.
     *
     * @param array|null $val14
     *
     * @return ExpertationsAdvanced
     */
    public function setVal14($val14 = null)
    {
        $this->val14 = $val14;

        return $this;
    }

    /**
     * Get val14.
     *
     * @return array|null
     */
    public function getVal14()
    {
        return $this->val14;
    }

    /**
     * Set val15.
     *
     * @param array|null $val15
     *
     * @return ExpertationsAdvanced
     */
    public function setVal15($val15 = null)
    {
        $this->val15 = $val15;

        return $this;
    }

    /**
     * Get val15.
     *
     * @return array|null
     */
    public function getVal15()
    {
        return $this->val15;
    }

    /**
     * Set val16.
     *
     * @param array|null $val16
     *
     * @return ExpertationsAdvanced
     */
    public function setVal16($val16 = null)
    {
        $this->val16 = $val16;

        return $this;
    }

    /**
     * Get val16.
     *
     * @return array|null
     */
    public function getVal16()
    {
        return $this->val16;
    }

    /**
     * Set val17.
     *
     * @param array|null $val17
     *
     * @return ExpertationsAdvanced
     */
    public function setVal17($val17 = null)
    {
        $this->val17 = $val17;

        return $this;
    }

    /**
     * Get val17.
     *
     * @return array|null
     */
    public function getVal17()
    {
        return $this->val17;
    }

    /**
     * Set val18.
     *
     * @param array|null $val18
     *
     * @return ExpertationsAdvanced
     */
    public function setVal18($val18 = null)
    {
        $this->val18 = $val18;

        return $this;
    }

    /**
     * Get val18.
     *
     * @return array|null
     */
    public function getVal18()
    {
        return $this->val18;
    }

    /**
     * Set val19.
     *
     * @param array|null $val19
     *
     * @return ExpertationsAdvanced
     */
    public function setVal19($val19 = null)
    {
        $this->val19 = $val19;

        return $this;
    }

    /**
     * Get val19.
     *
     * @return array|null
     */
    public function getVal19()
    {
        return $this->val19;
    }

    /**
     * Set val20.
     *
     * @param array|null $val20
     *
     * @return ExpertationsAdvanced
     */
    public function setVal20($val20 = null)
    {
        $this->val20 = $val20;

        return $this;
    }

    /**
     * Get val20.
     *
     * @return array|null
     */
    public function getVal20()
    {
        return $this->val20;
    }

    /**
     * Set val21.
     *
     * @param array|null $val21
     *
     * @return ExpertationsAdvanced
     */
    public function setVal21($val21 = null)
    {
        $this->val21 = $val21;

        return $this;
    }

    /**
     * Get val21.
     *
     * @return array|null
     */
    public function getVal21()
    {
        return $this->val21;
    }

    /**
     * Set val22.
     *
     * @param array|null $val22
     *
     * @return ExpertationsAdvanced
     */
    public function setVal22($val22 = null)
    {
        $this->val22 = $val22;

        return $this;
    }

    /**
     * Get val22.
     *
     * @return array|null
     */
    public function getVal22()
    {
        return $this->val22;
    }

    /**
     * Set val23.
     *
     * @param array|null $val23
     *
     * @return ExpertationsAdvanced
     */
    public function setVal23($val23 = null)
    {
        $this->val23 = $val23;

        return $this;
    }

    /**
     * Get val23.
     *
     * @return array|null
     */
    public function getVal23()
    {
        return $this->val23;
    }

    /**
     * Set val24.
     *
     * @param array|null $val24
     *
     * @return ExpertationsAdvanced
     */
    public function setVal24($val24 = null)
    {
        $this->val24 = $val24;

        return $this;
    }

    /**
     * Get val24.
     *
     * @return array|null
     */
    public function getVal24()
    {
        return $this->val24;
    }

    /**
     * Set val25.
     *
     * @param array|null $val25
     *
     * @return ExpertationsAdvanced
     */
    public function setVal25($val25 = null)
    {
        $this->val25 = $val25;

        return $this;
    }

    /**
     * Get val25.
     *
     * @return array|null
     */
    public function getVal25()
    {
        return $this->val25;
    }

    /**
     * Set val26.
     *
     * @param array|null $val26
     *
     * @return ExpertationsAdvanced
     */
    public function setVal26($val26 = null)
    {
        $this->val26 = $val26;

        return $this;
    }

    /**
     * Get val26.
     *
     * @return array|null
     */
    public function getVal26()
    {
        return $this->val26;
    }

    /**
     * Set val27.
     *
     * @param array|null $val27
     *
     * @return ExpertationsAdvanced
     */
    public function setVal27($val27 = null)
    {
        $this->val27 = $val27;

        return $this;
    }

    /**
     * Get val27.
     *
     * @return array|null
     */
    public function getVal27()
    {
        return $this->val27;
    }

    /**
     * Set val28.
     *
     * @param array|null $val28
     *
     * @return ExpertationsAdvanced
     */
    public function setVal28($val28 = null)
    {
        $this->val28 = $val28;

        return $this;
    }

    /**
     * Get val28.
     *
     * @return array|null
     */
    public function getVal28()
    {
        return $this->val28;
    }

    /**
     * Set val29.
     *
     * @param array|null $val29
     *
     * @return ExpertationsAdvanced
     */
    public function setVal29($val29 = null)
    {
        $this->val29 = $val29;

        return $this;
    }

    /**
     * Get val29.
     *
     * @return array|null
     */
    public function getVal29()
    {
        return $this->val29;
    }

    /**
     * Set val30.
     *
     * @param array|null $val30
     *
     * @return ExpertationsAdvanced
     */
    public function setVal30($val30 = null)
    {
        $this->val30 = $val30;

        return $this;
    }

    /**
     * Get val30.
     *
     * @return array|null
     */
    public function getVal30()
    {
        return $this->val30;
    }

    /**
     * Set val31.
     *
     * @param array|null $val31
     *
     * @return ExpertationsAdvanced
     */
    public function setVal31($val31 = null)
    {
        $this->val31 = $val31;

        return $this;
    }

    /**
     * Get val31.
     *
     * @return array|null
     */
    public function getVal31()
    {
        return $this->val31;
    }

    /**
     * Set val32.
     *
     * @param array|null $val32
     *
     * @return ExpertationsAdvanced
     */
    public function setVal32($val32 = null)
    {
        $this->val32 = $val32;

        return $this;
    }

    /**
     * Get val32.
     *
     * @return array|null
     */
    public function getVal32()
    {
        return $this->val32;
    }

    /**
     * Set val33.
     *
     * @param array|null $val33
     *
     * @return ExpertationsAdvanced
     */
    public function setVal33($val33 = null)
    {
        $this->val33 = $val33;

        return $this;
    }

    /**
     * Get val33.
     *
     * @return array|null
     */
    public function getVal33()
    {
        return $this->val33;
    }

    /**
     * Set val34.
     *
     * @param array|null $val34
     *
     * @return ExpertationsAdvanced
     */
    public function setVal34($val34 = null)
    {
        $this->val34 = $val34;

        return $this;
    }

    /**
     * Get val34.
     *
     * @return array|null
     */
    public function getVal34()
    {
        return $this->val34;
    }

    /**
     * Set val35.
     *
     * @param array|null $val35
     *
     * @return ExpertationsAdvanced
     */
    public function setVal35($val35 = null)
    {
        $this->val35 = $val35;

        return $this;
    }

    /**
     * Get val35.
     *
     * @return array|null
     */
    public function getVal35()
    {
        return $this->val35;
    }

    /**
     * Set val36.
     *
     * @param array|null $val36
     *
     * @return ExpertationsAdvanced
     */
    public function setVal36($val36 = null)
    {
        $this->val36 = $val36;

        return $this;
    }

    /**
     * Get val36.
     *
     * @return array|null
     */
    public function getVal36()
    {
        return $this->val36;
    }

    /**
     * Set val37.
     *
     * @param array|null $val37
     *
     * @return ExpertationsAdvanced
     */
    public function setVal37($val37 = null)
    {
        $this->val37 = $val37;

        return $this;
    }

    /**
     * Get val37.
     *
     * @return array|null
     */
    public function getVal37()
    {
        return $this->val37;
    }

    /**
     * Set val38.
     *
     * @param array|null $val38
     *
     * @return ExpertationsAdvanced
     */
    public function setVal38($val38 = null)
    {
        $this->val38 = $val38;

        return $this;
    }

    /**
     * Get val38.
     *
     * @return array|null
     */
    public function getVal38()
    {
        return $this->val38;
    }

    /**
     * Set val39.
     *
     * @param array|null $val39
     *
     * @return ExpertationsAdvanced
     */
    public function setVal39($val39 = null)
    {
        $this->val39 = $val39;

        return $this;
    }

    /**
     * Get val39.
     *
     * @return array|null
     */
    public function getVal39()
    {
        return $this->val39;
    }

    /**
     * Set val40.
     *
     * @param array|null $val40
     *
     * @return ExpertationsAdvanced
     */
    public function setVal40($val40 = null)
    {
        $this->val40 = $val40;

        return $this;
    }

    /**
     * Get val40.
     *
     * @return array|null
     */
    public function getVal40()
    {
        return $this->val40;
    }

    /**
     * Set val41.
     *
     * @param array|null $val41
     *
     * @return ExpertationsAdvanced
     */
    public function setVal41($val41 = null)
    {
        $this->val41 = $val41;

        return $this;
    }

    /**
     * Get val41.
     *
     * @return array|null
     */
    public function getVal41()
    {
        return $this->val41;
    }

    /**
     * Set val42.
     *
     * @param array|null $val42
     *
     * @return ExpertationsAdvanced
     */
    public function setVal42($val42 = null)
    {
        $this->val42 = $val42;

        return $this;
    }

    /**
     * Get val42.
     *
     * @return array|null
     */
    public function getVal42()
    {
        return $this->val42;
    }

    /**
     * Set val43.
     *
     * @param array|null $val43
     *
     * @return ExpertationsAdvanced
     */
    public function setVal43($val43 = null)
    {
        $this->val43 = $val43;

        return $this;
    }

    /**
     * Get val43.
     *
     * @return array|null
     */
    public function getVal43()
    {
        return $this->val43;
    }

    /**
     * Set val44.
     *
     * @param array|null $val44
     *
     * @return ExpertationsAdvanced
     */
    public function setVal44($val44 = null)
    {
        $this->val44 = $val44;

        return $this;
    }

    /**
     * Get val44.
     *
     * @return array|null
     */
    public function getVal44()
    {
        return $this->val44;
    }

    /**
     * Set val45.
     *
     * @param array|null $val45
     *
     * @return ExpertationsAdvanced
     */
    public function setVal45($val45 = null)
    {
        $this->val45 = $val45;

        return $this;
    }

    /**
     * Get val45.
     *
     * @return array|null
     */
    public function getVal45()
    {
        return $this->val45;
    }

    /**
     * Set val46.
     *
     * @param array|null $val46
     *
     * @return ExpertationsAdvanced
     */
    public function setVal46($val46 = null)
    {
        $this->val46 = $val46;

        return $this;
    }

    /**
     * Get val46.
     *
     * @return array|null
     */
    public function getVal46()
    {
        return $this->val46;
    }

    /**
     * Set val47.
     *
     * @param array|null $val47
     *
     * @return ExpertationsAdvanced
     */
    public function setVal47($val47 = null)
    {
        $this->val47 = $val47;

        return $this;
    }

    /**
     * Get val47.
     *
     * @return array|null
     */
    public function getVal47()
    {
        return $this->val47;
    }

    /**
     * Set val48.
     *
     * @param array|null $val48
     *
     * @return ExpertationsAdvanced
     */
    public function setVal48($val48 = null)
    {
        $this->val48 = $val48;

        return $this;
    }

    /**
     * Get val48.
     *
     * @return array|null
     */
    public function getVal48()
    {
        return $this->val48;
    }

    /**
     * Set val49.
     *
     * @param array|null $val49
     *
     * @return ExpertationsAdvanced
     */
    public function setVal49($val49 = null)
    {
        $this->val49 = $val49;

        return $this;
    }

    /**
     * Get val49.
     *
     * @return array|null
     */
    public function getVal49()
    {
        return $this->val49;
    }

    /**
     * Set val50.
     *
     * @param array|null $val50
     *
     * @return ExpertationsAdvanced
     */
    public function setVal50($val50 = null)
    {
        $this->val50 = $val50;

        return $this;
    }

    /**
     * Get val50.
     *
     * @return array|null
     */
    public function getVal50()
    {
        return $this->val50;
    }

    /**
     * Set val51.
     *
     * @param array|null $val51
     *
     * @return ExpertationsAdvanced
     */
    public function setVal51($val51 = null)
    {
        $this->val51 = $val51;

        return $this;
    }

    /**
     * Get val51.
     *
     * @return array|null
     */
    public function getVal51()
    {
        return $this->val51;
    }

    /**
     * Set val52.
     *
     * @param array|null $val52
     *
     * @return ExpertationsAdvanced
     */
    public function setVal52($val52 = null)
    {
        $this->val52 = $val52;

        return $this;
    }

    /**
     * Get val52.
     *
     * @return array|null
     */
    public function getVal52()
    {
        return $this->val52;
    }

    /**
     * Set val53.
     *
     * @param array|null $val53
     *
     * @return ExpertationsAdvanced
     */
    public function setVal53($val53 = null)
    {
        $this->val53 = $val53;

        return $this;
    }

    /**
     * Get val53.
     *
     * @return array|null
     */
    public function getVal53()
    {
        return $this->val53;
    }

    /**
     * Set val54.
     *
     * @param array|null $val54
     *
     * @return ExpertationsAdvanced
     */
    public function setVal54($val54 = null)
    {
        $this->val54 = $val54;

        return $this;
    }

    /**
     * Get val54.
     *
     * @return array|null
     */
    public function getVal54()
    {
        return $this->val54;
    }

    /**
     * Set val55.
     *
     * @param array|null $val55
     *
     * @return ExpertationsAdvanced
     */
    public function setVal55($val55 = null)
    {
        $this->val55 = $val55;

        return $this;
    }

    /**
     * Get val55.
     *
     * @return array|null
     */
    public function getVal55()
    {
        return $this->val55;
    }

    /**
     * Set val56.
     *
     * @param array|null $val56
     *
     * @return ExpertationsAdvanced
     */
    public function setVal56($val56 = null)
    {
        $this->val56 = $val56;

        return $this;
    }

    /**
     * Get val56.
     *
     * @return array|null
     */
    public function getVal56()
    {
        return $this->val56;
    }

    /**
     * Set val57.
     *
     * @param array|null $val57
     *
     * @return ExpertationsAdvanced
     */
    public function setVal57($val57 = null)
    {
        $this->val57 = $val57;

        return $this;
    }

    /**
     * Get val57.
     *
     * @return array|null
     */
    public function getVal57()
    {
        return $this->val57;
    }

    /**
     * Set val58.
     *
     * @param array|null $val58
     *
     * @return ExpertationsAdvanced
     */
    public function setVal58($val58 = null)
    {
        $this->val58 = $val58;

        return $this;
    }

    /**
     * Get val58.
     *
     * @return array|null
     */
    public function getVal58()
    {
        return $this->val58;
    }

    /**
     * Set val59.
     *
     * @param array|null $val59
     *
     * @return ExpertationsAdvanced
     */
    public function setVal59($val59 = null)
    {
        $this->val59 = $val59;

        return $this;
    }

    /**
     * Get val59.
     *
     * @return array|null
     */
    public function getVal59()
    {
        return $this->val59;
    }

    /**
     * Set val60.
     *
     * @param array|null $val60
     *
     * @return ExpertationsAdvanced
     */
    public function setVal60($val60 = null)
    {
        $this->val60 = $val60;

        return $this;
    }

    /**
     * Get val60.
     *
     * @return array|null
     */
    public function getVal60()
    {
        return $this->val60;
    }

    /**
     * Set val61.
     *
     * @param array|null $val61
     *
     * @return ExpertationsAdvanced
     */
    public function setVal61($val61 = null)
    {
        $this->val61 = $val61;

        return $this;
    }

    /**
     * Get val61.
     *
     * @return array|null
     */
    public function getVal61()
    {
        return $this->val61;
    }

    /**
     * Set val62.
     *
     * @param array|null $val62
     *
     * @return ExpertationsAdvanced
     */
    public function setVal62($val62 = null)
    {
        $this->val62 = $val62;

        return $this;
    }

    /**
     * Get val62.
     *
     * @return array|null
     */
    public function getVal62()
    {
        return $this->val62;
    }

    /**
     * Set val63.
     *
     * @param array|null $val63
     *
     * @return ExpertationsAdvanced
     */
    public function setVal63($val63 = null)
    {
        $this->val63 = $val63;

        return $this;
    }

    /**
     * Get val63.
     *
     * @return array|null
     */
    public function getVal63()
    {
        return $this->val63;
    }

    /**
     * Set val64.
     *
     * @param array|null $val64
     *
     * @return ExpertationsAdvanced
     */
    public function setVal64($val64 = null)
    {
        $this->val64 = $val64;

        return $this;
    }

    /**
     * Get val64.
     *
     * @return array|null
     */
    public function getVal64()
    {
        return $this->val64;
    }

    /**
     * Set val65.
     *
     * @param array|null $val65
     *
     * @return ExpertationsAdvanced
     */
    public function setVal65($val65 = null)
    {
        $this->val65 = $val65;

        return $this;
    }

    /**
     * Get val65.
     *
     * @return array|null
     */
    public function getVal65()
    {
        return $this->val65;
    }


    /**
     * Set fatherFloor.
     *
     * @param int $fatherFloor
     *
     * @return ExpertationsAdvanced
     */
    public function setFatherFloor($fatherFloor)
    {
        $this->fatherFloor = $fatherFloor;

        return $this;
    }

    /**
     * Get fatherFloor.
     *
     * @return int
     */
    public function getFatherFloor()
    {
        return $this->fatherFloor;
    }

    /**
     * Set opt1Enabled.
     *
     * @param bool|null $opt1Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt1Enabled($opt1Enabled = null)
    {
        $this->opt1Enabled = $opt1Enabled;

        return $this;
    }

    /**
     * Get opt1Enabled.
     *
     * @return bool|null
     */
    public function getOpt1Enabled()
    {
        return $this->opt1Enabled;
    }

    /**
     * Set opt11Value.
     *
     * @param int|null $opt11Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt11Value($opt11Value = null)
    {
        $this->opt1_1Value = $opt11Value;

        return $this;
    }

    /**
     * Get opt11Value.
     *
     * @return int|null
     */
    public function getOpt11Value()
    {
        return $this->opt1_1Value;
    }

    /**
     * Set opt12Value.
     *
     * @param int|null $opt12Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt12Value($opt12Value = null)
    {
        $this->opt1_2Value = $opt12Value;

        return $this;
    }

    /**
     * Get opt12Value.
     *
     * @return int|null
     */
    public function getOpt12Value()
    {
        return $this->opt1_2Value;
    }

    /**
     * Set opt13Value.
     *
     * @param int|null $opt13Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt13Value($opt13Value = null)
    {
        $this->opt1_3Value = $opt13Value;

        return $this;
    }

    /**
     * Get opt13Value.
     *
     * @return int|null
     */
    public function getOpt13Value()
    {
        return $this->opt1_3Value;
    }

    /**
     * Set opt14Value.
     *
     * @param int|null $opt14Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt14Value($opt14Value = null)
    {
        $this->opt1_4Value = $opt14Value;

        return $this;
    }

    /**
     * Get opt14Value.
     *
     * @return int|null
     */
    public function getOpt14Value()
    {
        return $this->opt1_4Value;
    }

    /**
     * Set opt2Enabled.
     *
     * @param bool|null $opt2Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt2Enabled($opt2Enabled = null)
    {
        $this->opt2Enabled = $opt2Enabled;

        return $this;
    }

    /**
     * Get opt2Enabled.
     *
     * @return bool|null
     */
    public function getOpt2Enabled()
    {
        return $this->opt2Enabled;
    }

    /**
     * Set opt21Value.
     *
     * @param int|null $opt21Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt21Value($opt21Value = null)
    {
        $this->opt2_1Value = $opt21Value;

        return $this;
    }

    /**
     * Get opt21Value.
     *
     * @return int|null
     */
    public function getOpt21Value()
    {
        return $this->opt2_1Value;
    }

    /**
     * Set opt22Value.
     *
     * @param int|null $opt22Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt22Value($opt22Value = null)
    {
        $this->opt2_2Value = $opt22Value;

        return $this;
    }

    /**
     * Get opt22Value.
     *
     * @return int|null
     */
    public function getOpt22Value()
    {
        return $this->opt2_2Value;
    }

    /**
     * Set opt3Enabled.
     *
     * @param bool|null $opt3Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt3Enabled($opt3Enabled = null)
    {
        $this->opt3Enabled = $opt3Enabled;

        return $this;
    }

    /**
     * Get opt3Enabled.
     *
     * @return bool|null
     */
    public function getOpt3Enabled()
    {
        return $this->opt3Enabled;
    }

    /**
     * Set opt31Value.
     *
     * @param int|null $opt31Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt31Value($opt31Value = null)
    {
        $this->opt3_1Value = $opt31Value;

        return $this;
    }

    /**
     * Get opt31Value.
     *
     * @return int|null
     */
    public function getOpt31Value()
    {
        return $this->opt3_1Value;
    }

    /**
     * Set opt32Value.
     *
     * @param int|null $opt32Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt32Value($opt32Value = null)
    {
        $this->opt3_2Value = $opt32Value;

        return $this;
    }

    /**
     * Get opt32Value.
     *
     * @return int|null
     */
    public function getOpt32Value()
    {
        return $this->opt3_2Value;
    }

    /**
     * Set opt33Value.
     *
     * @param int|null $opt33Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt33Value($opt33Value = null)
    {
        $this->opt3_3Value = $opt33Value;

        return $this;
    }

    /**
     * Get opt33Value.
     *
     * @return int|null
     */
    public function getOpt33Value()
    {
        return $this->opt3_3Value;
    }

    /**
     * Set opt34Value.
     *
     * @param int|null $opt34Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt34Value($opt34Value = null)
    {
        $this->opt3_4Value = $opt34Value;

        return $this;
    }

    /**
     * Get opt34Value.
     *
     * @return int|null
     */
    public function getOpt34Value()
    {
        return $this->opt3_4Value;
    }

    /**
     * Set opt35Value.
     *
     * @param int|null $opt35Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt35Value($opt35Value = null)
    {
        $this->opt3_5Value = $opt35Value;

        return $this;
    }

    /**
     * Get opt35Value.
     *
     * @return int|null
     */
    public function getOpt35Value()
    {
        return $this->opt3_5Value;
    }

    /**
     * Set opt36Value.
     *
     * @param int|null $opt36Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt36Value($opt36Value = null)
    {
        $this->opt3_6Value = $opt36Value;

        return $this;
    }

    /**
     * Get opt36Value.
     *
     * @return int|null
     */
    public function getOpt36Value()
    {
        return $this->opt3_6Value;
    }

    /**
     * Set opt37Value.
     *
     * @param int|null $opt37Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt37Value($opt37Value = null)
    {
        $this->opt3_7Value = $opt37Value;

        return $this;
    }

    /**
     * Get opt37Value.
     *
     * @return int|null
     */
    public function getOpt37Value()
    {
        return $this->opt3_7Value;
    }

    /**
     * Set opt38Value.
     *
     * @param int|null $opt38Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt38Value($opt38Value = null)
    {
        $this->opt3_8Value = $opt38Value;

        return $this;
    }

    /**
     * Get opt38Value.
     *
     * @return int|null
     */
    public function getOpt38Value()
    {
        return $this->opt3_8Value;
    }

    /**
     * Set opt39Value.
     *
     * @param int|null $opt39Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt39Value($opt39Value = null)
    {
        $this->opt3_9Value = $opt39Value;

        return $this;
    }

    /**
     * Get opt39Value.
     *
     * @return int|null
     */
    public function getOpt39Value()
    {
        return $this->opt3_9Value;
    }

    /**
     * Set opt4Enabled.
     *
     * @param bool|null $opt4Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt4Enabled($opt4Enabled = null)
    {
        $this->opt4Enabled = $opt4Enabled;

        return $this;
    }

    /**
     * Get opt4Enabled.
     *
     * @return bool|null
     */
    public function getOpt4Enabled()
    {
        return $this->opt4Enabled;
    }

    /**
     * Set opt41Value.
     *
     * @param int|null $opt41Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt41Value($opt41Value = null)
    {
        $this->opt4_1Value = $opt41Value;

        return $this;
    }

    /**
     * Get opt41Value.
     *
     * @return int|null
     */
    public function getOpt41Value()
    {
        return $this->opt4_1Value;
    }

    /**
     * Set opt42Value.
     *
     * @param int|null $opt42Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt42Value($opt42Value = null)
    {
        $this->opt4_2Value = $opt42Value;

        return $this;
    }

    /**
     * Get opt42Value.
     *
     * @return int|null
     */
    public function getOpt42Value()
    {
        return $this->opt4_2Value;
    }

    /**
     * Set opt43Value.
     *
     * @param int|null $opt43Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt43Value($opt43Value = null)
    {
        $this->opt4_3Value = $opt43Value;

        return $this;
    }

    /**
     * Get opt43Value.
     *
     * @return int|null
     */
    public function getOpt43Value()
    {
        return $this->opt4_3Value;
    }

    /**
     * Set opt5Enabled.
     *
     * @param bool|null $opt5Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt5Enabled($opt5Enabled = null)
    {
        $this->opt5Enabled = $opt5Enabled;

        return $this;
    }

    /**
     * Get opt5Enabled.
     *
     * @return bool|null
     */
    public function getOpt5Enabled()
    {
        return $this->opt5Enabled;
    }

    /**
     * Set opt51Value.
     *
     * @param int|null $opt51Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt51Value($opt51Value = null)
    {
        $this->opt5_1Value = $opt51Value;

        return $this;
    }

    /**
     * Get opt51Value.
     *
     * @return int|null
     */
    public function getOpt51Value()
    {
        return $this->opt5_1Value;
    }

    /**
     * Set opt52Value.
     *
     * @param int|null $opt52Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt52Value($opt52Value = null)
    {
        $this->opt5_2Value = $opt52Value;

        return $this;
    }

    /**
     * Get opt52Value.
     *
     * @return int|null
     */
    public function getOpt52Value()
    {
        return $this->opt5_2Value;
    }

    /**
     * Set opt53Value.
     *
     * @param int|null $opt53Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt53Value($opt53Value = null)
    {
        $this->opt5_3Value = $opt53Value;

        return $this;
    }

    /**
     * Get opt53Value.
     *
     * @return int|null
     */
    public function getOpt53Value()
    {
        return $this->opt5_3Value;
    }

    /**
     * Set opt6Enabled.
     *
     * @param bool|null $opt6Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt6Enabled($opt6Enabled = null)
    {
        $this->opt6Enabled = $opt6Enabled;

        return $this;
    }

    /**
     * Get opt6Enabled.
     *
     * @return bool|null
     */
    public function getOpt6Enabled()
    {
        return $this->opt6Enabled;
    }

    /**
     * Set opt61Value.
     *
     * @param int|null $opt61Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt61Value($opt61Value = null)
    {
        $this->opt6_1Value = $opt61Value;

        return $this;
    }

    /**
     * Get opt61Value.
     *
     * @return int|null
     */
    public function getOpt61Value()
    {
        return $this->opt6_1Value;
    }

    /**
     * Set opt7Enabled.
     *
     * @param bool|null $opt7Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt7Enabled($opt7Enabled = null)
    {
        $this->opt7Enabled = $opt7Enabled;

        return $this;
    }

    /**
     * Get opt7Enabled.
     *
     * @return bool|null
     */
    public function getOpt7Enabled()
    {
        return $this->opt7Enabled;
    }

    /**
     * Set opt71Value.
     *
     * @param int|null $opt71Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt71Value($opt71Value = null)
    {
        $this->opt7_1Value = $opt71Value;

        return $this;
    }

    /**
     * Get opt71Value.
     *
     * @return int|null
     */
    public function getOpt71Value()
    {
        return $this->opt7_1Value;
    }

    /**
     * Set opt72Value.
     *
     * @param int|null $opt72Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt72Value($opt72Value = null)
    {
        $this->opt7_2Value = $opt72Value;

        return $this;
    }

    /**
     * Get opt72Value.
     *
     * @return int|null
     */
    public function getOpt72Value()
    {
        return $this->opt7_2Value;
    }

    /**
     * Set opt73Value.
     *
     * @param int|null $opt73Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt73Value($opt73Value = null)
    {
        $this->opt7_3Value = $opt73Value;

        return $this;
    }

    /**
     * Get opt73Value.
     *
     * @return int|null
     */
    public function getOpt73Value()
    {
        return $this->opt7_3Value;
    }

    /**
     * Set opt8Enabled.
     *
     * @param bool|null $opt8Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt8Enabled($opt8Enabled = null)
    {
        $this->opt8Enabled = $opt8Enabled;

        return $this;
    }

    /**
     * Get opt8Enabled.
     *
     * @return bool|null
     */
    public function getOpt8Enabled()
    {
        return $this->opt8Enabled;
    }

    /**
     * Set opt81Value.
     *
     * @param int|null $opt81Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt81Value($opt81Value = null)
    {
        $this->opt8_1Value = $opt81Value;

        return $this;
    }

    /**
     * Get opt81Value.
     *
     * @return int|null
     */
    public function getOpt81Value()
    {
        return $this->opt8_1Value;
    }

    /**
     * Set opt82Value.
     *
     * @param int|null $opt82Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt82Value($opt82Value = null)
    {
        $this->opt8_2Value = $opt82Value;

        return $this;
    }

    /**
     * Get opt82Value.
     *
     * @return int|null
     */
    public function getOpt82Value()
    {
        return $this->opt8_2Value;
    }

    /**
     * Set opt83Value.
     *
     * @param int|null $opt83Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt83Value($opt83Value = null)
    {
        $this->opt8_3Value = $opt83Value;

        return $this;
    }

    /**
     * Get opt83Value.
     *
     * @return int|null
     */
    public function getOpt83Value()
    {
        return $this->opt8_3Value;
    }

    /**
     * Set opt9Enabled.
     *
     * @param bool|null $opt9Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt9Enabled($opt9Enabled = null)
    {
        $this->opt9Enabled = $opt9Enabled;

        return $this;
    }

    /**
     * Get opt9Enabled.
     *
     * @return bool|null
     */
    public function getOpt9Enabled()
    {
        return $this->opt9Enabled;
    }

    /**
     * Set opt91Value.
     *
     * @param int|null $opt91Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt91Value($opt91Value = null)
    {
        $this->opt9_1Value = $opt91Value;

        return $this;
    }

    /**
     * Get opt91Value.
     *
     * @return int|null
     */
    public function getOpt91Value()
    {
        return $this->opt9_1Value;
    }

    /**
     * Set opt92Value.
     *
     * @param int|null $opt92Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt92Value($opt92Value = null)
    {
        $this->opt9_2Value = $opt92Value;

        return $this;
    }

    /**
     * Get opt92Value.
     *
     * @return int|null
     */
    public function getOpt92Value()
    {
        return $this->opt9_2Value;
    }

    /**
     * Set opt93Value.
     *
     * @param int|null $opt93Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt93Value($opt93Value = null)
    {
        $this->opt9_3Value = $opt93Value;

        return $this;
    }

    /**
     * Get opt93Value.
     *
     * @return int|null
     */
    public function getOpt93Value()
    {
        return $this->opt9_3Value;
    }

    /**
     * Set opt10Enabled.
     *
     * @param bool|null $opt10Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt10Enabled($opt10Enabled = null)
    {
        $this->opt10Enabled = $opt10Enabled;

        return $this;
    }

    /**
     * Get opt10Enabled.
     *
     * @return bool|null
     */
    public function getOpt10Enabled()
    {
        return $this->opt10Enabled;
    }

    /**
     * Set opt101Value.
     *
     * @param int|null $opt101Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt101Value($opt101Value = null)
    {
        $this->opt10_1Value = $opt101Value;

        return $this;
    }

    /**
     * Get opt101Value.
     *
     * @return int|null
     */
    public function getOpt101Value()
    {
        return $this->opt10_1Value;
    }

    /**
     * Set opt102Value.
     *
     * @param int|null $opt102Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt102Value($opt102Value = null)
    {
        $this->opt10_2Value = $opt102Value;

        return $this;
    }

    /**
     * Get opt102Value.
     *
     * @return int|null
     */
    public function getOpt102Value()
    {
        return $this->opt10_2Value;
    }

    /**
     * Set opt103Value.
     *
     * @param int|null $opt103Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt103Value($opt103Value = null)
    {
        $this->opt10_3Value = $opt103Value;

        return $this;
    }

    /**
     * Get opt103Value.
     *
     * @return int|null
     */
    public function getOpt103Value()
    {
        return $this->opt10_3Value;
    }

    /**
     * Set opt104Value.
     *
     * @param int|null $opt104Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt104Value($opt104Value = null)
    {
        $this->opt10_4Value = $opt104Value;

        return $this;
    }

    /**
     * Get opt104Value.
     *
     * @return int|null
     */
    public function getOpt104Value()
    {
        return $this->opt10_4Value;
    }

    /**
     * Set opt105Value.
     *
     * @param int|null $opt105Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt105Value($opt105Value = null)
    {
        $this->opt10_5Value = $opt105Value;

        return $this;
    }

    /**
     * Get opt105Value.
     *
     * @return int|null
     */
    public function getOpt105Value()
    {
        return $this->opt10_5Value;
    }

    /**
     * Set opt106Value.
     *
     * @param int|null $opt106Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt106Value($opt106Value = null)
    {
        $this->opt10_6Value = $opt106Value;

        return $this;
    }

    /**
     * Get opt106Value.
     *
     * @return int|null
     */
    public function getOpt106Value()
    {
        return $this->opt10_6Value;
    }

    /**
     * Set opt107Value.
     *
     * @param int|null $opt107Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt107Value($opt107Value = null)
    {
        $this->opt10_7Value = $opt107Value;

        return $this;
    }

    /**
     * Get opt107Value.
     *
     * @return int|null
     */
    public function getOpt107Value()
    {
        return $this->opt10_7Value;
    }

    /**
     * Set opt108Value.
     *
     * @param int|null $opt108Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt108Value($opt108Value = null)
    {
        $this->opt10_8Value = $opt108Value;

        return $this;
    }

    /**
     * Get opt108Value.
     *
     * @return int|null
     */
    public function getOpt108Value()
    {
        return $this->opt10_8Value;
    }

    /**
     * Set opt109Value.
     *
     * @param int|null $opt109Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt109Value($opt109Value = null)
    {
        $this->opt10_9Value = $opt109Value;

        return $this;
    }

    /**
     * Get opt109Value.
     *
     * @return int|null
     */
    public function getOpt109Value()
    {
        return $this->opt10_9Value;
    }


    /**
     * Set opt11Enabled.
     *
     * @param bool|null $opt11Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt11Enabled($opt11Enabled = null)
    {
        $this->opt11Enabled = $opt11Enabled;

        return $this;
    }

    /**
     * Get opt11Enabled.
     *
     * @return bool|null
     */
    public function getOpt11Enabled()
    {
        return $this->opt11Enabled;
    }

    /**
     * Set opt111Value.
     *
     * @param int|null $opt111Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt111Value($opt111Value = null)
    {
        $this->opt11_1Value = $opt111Value;

        return $this;
    }

    /**
     * Get opt111Value.
     *
     * @return int|null
     */
    public function getOpt111Value()
    {
        return $this->opt11_1Value;
    }

    /**
     * Set opt112Value.
     *
     * @param int|null $opt112Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt112Value($opt112Value = null)
    {
        $this->opt11_2Value = $opt112Value;

        return $this;
    }

    /**
     * Get opt112Value.
     *
     * @return int|null
     */
    public function getOpt112Value()
    {
        return $this->opt11_2Value;
    }

    /**
     * Set opt113Value.
     *
     * @param int|null $opt113Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt113Value($opt113Value = null)
    {
        $this->opt11_3Value = $opt113Value;

        return $this;
    }

    /**
     * Get opt113Value.
     *
     * @return int|null
     */
    public function getOpt113Value()
    {
        return $this->opt11_3Value;
    }

    /**
     * Set opt114Value.
     *
     * @param int|null $opt114Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt114Value($opt114Value = null)
    {
        $this->opt11_4Value = $opt114Value;

        return $this;
    }

    /**
     * Get opt114Value.
     *
     * @return int|null
     */
    public function getOpt114Value()
    {
        return $this->opt11_4Value;
    }

    /**
     * Set opt115Value.
     *
     * @param int|null $opt115Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt115Value($opt115Value = null)
    {
        $this->opt11_5Value = $opt115Value;

        return $this;
    }

    /**
     * Get opt115Value.
     *
     * @return int|null
     */
    public function getOpt115Value()
    {
        return $this->opt11_5Value;
    }

    /**
     * Set opt12Enabled.
     *
     * @param bool|null $opt12Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt12Enabled($opt12Enabled = null)
    {
        $this->opt12Enabled = $opt12Enabled;

        return $this;
    }

    /**
     * Get opt12Enabled.
     *
     * @return bool|null
     */
    public function getOpt12Enabled()
    {
        return $this->opt12Enabled;
    }

    /**
     * Set opt121Value.
     *
     * @param int|null $opt121Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt121Value($opt121Value = null)
    {
        $this->opt12_1Value = $opt121Value;

        return $this;
    }

    /**
     * Get opt121Value.
     *
     * @return int|null
     */
    public function getOpt121Value()
    {
        return $this->opt12_1Value;
    }

    /**
     * Set opt122Value.
     *
     * @param int|null $opt122Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt122Value($opt122Value = null)
    {
        $this->opt12_2Value = $opt122Value;

        return $this;
    }

    /**
     * Get opt122Value.
     *
     * @return int|null
     */
    public function getOpt122Value()
    {
        return $this->opt12_2Value;
    }

    /**
     * Set opt123Value.
     *
     * @param int|null $opt123Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt123Value($opt123Value = null)
    {
        $this->opt12_3Value = $opt123Value;

        return $this;
    }

    /**
     * Get opt123Value.
     *
     * @return int|null
     */
    public function getOpt123Value()
    {
        return $this->opt12_3Value;
    }

    /**
     * Set opt13Enabled.
     *
     * @param bool|null $opt13Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt13Enabled($opt13Enabled = null)
    {
        $this->opt13Enabled = $opt13Enabled;

        return $this;
    }

    /**
     * Get opt13Enabled.
     *
     * @return bool|null
     */
    public function getOpt13Enabled()
    {
        return $this->opt13Enabled;
    }

    /**
     * Set opt131Value.
     *
     * @param int|null $opt131Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt131Value($opt131Value = null)
    {
        $this->opt13_1Value = $opt131Value;

        return $this;
    }

    /**
     * Get opt131Value.
     *
     * @return int|null
     */
    public function getOpt131Value()
    {
        return $this->opt13_1Value;
    }

    /**
     * Set opt132Value.
     *
     * @param int|null $opt132Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt132Value($opt132Value = null)
    {
        $this->opt13_2Value = $opt132Value;

        return $this;
    }

    /**
     * Get opt132Value.
     *
     * @return int|null
     */
    public function getOpt132Value()
    {
        return $this->opt13_2Value;
    }

    /**
     * Set opt133Value.
     *
     * @param int|null $opt133Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt133Value($opt133Value = null)
    {
        $this->opt13_3Value = $opt133Value;

        return $this;
    }

    /**
     * Get opt133Value.
     *
     * @return int|null
     */
    public function getOpt133Value()
    {
        return $this->opt13_3Value;
    }

    /**
     * Set opt134Value.
     *
     * @param int|null $opt134Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt134Value($opt134Value = null)
    {
        $this->opt13_4Value = $opt134Value;

        return $this;
    }

    /**
     * Get opt134Value.
     *
     * @return int|null
     */
    public function getOpt134Value()
    {
        return $this->opt13_4Value;
    }

    /**
     * Set opt14Enabled.
     *
     * @param bool|null $opt14Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt14Enabled($opt14Enabled = null)
    {
        $this->opt14Enabled = $opt14Enabled;

        return $this;
    }

    /**
     * Get opt14Enabled.
     *
     * @return bool|null
     */
    public function getOpt14Enabled()
    {
        return $this->opt14Enabled;
    }

    /**
     * Set opt141Value.
     *
     * @param int|null $opt141Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt141Value($opt141Value = null)
    {
        $this->opt14_1Value = $opt141Value;

        return $this;
    }

    /**
     * Get opt141Value.
     *
     * @return int|null
     */
    public function getOpt141Value()
    {
        return $this->opt14_1Value;
    }

    /**
     * Set opt142Value.
     *
     * @param int|null $opt142Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt142Value($opt142Value = null)
    {
        $this->opt14_2Value = $opt142Value;

        return $this;
    }

    /**
     * Get opt142Value.
     *
     * @return int|null
     */
    public function getOpt142Value()
    {
        return $this->opt14_2Value;
    }

    /**
     * Set opt143Value.
     *
     * @param int|null $opt143Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt143Value($opt143Value = null)
    {
        $this->opt14_3Value = $opt143Value;

        return $this;
    }

    /**
     * Get opt143Value.
     *
     * @return int|null
     */
    public function getOpt143Value()
    {
        return $this->opt14_3Value;
    }

    /**
     * Set opt144Value.
     *
     * @param int|null $opt144Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt144Value($opt144Value = null)
    {
        $this->opt14_4Value = $opt144Value;

        return $this;
    }

    /**
     * Get opt144Value.
     *
     * @return int|null
     */
    public function getOpt144Value()
    {
        return $this->opt14_4Value;
    }

    /**
     * Set opt145Value.
     *
     * @param int|null $opt145Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt145Value($opt145Value = null)
    {
        $this->opt14_5Value = $opt145Value;

        return $this;
    }

    /**
     * Get opt145Value.
     *
     * @return int|null
     */
    public function getOpt145Value()
    {
        return $this->opt14_5Value;
    }

    /**
     * Set opt146Value.
     *
     * @param int|null $opt146Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt146Value($opt146Value = null)
    {
        $this->opt14_6Value = $opt146Value;

        return $this;
    }

    /**
     * Get opt146Value.
     *
     * @return int|null
     */
    public function getOpt146Value()
    {
        return $this->opt14_6Value;
    }

    /**
     * Set opt15Enabled.
     *
     * @param bool|null $opt15Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt15Enabled($opt15Enabled = null)
    {
        $this->opt15Enabled = $opt15Enabled;

        return $this;
    }

    /**
     * Get opt15Enabled.
     *
     * @return bool|null
     */
    public function getOpt15Enabled()
    {
        return $this->opt15Enabled;
    }

    /**
     * Set opt151Value.
     *
     * @param int|null $opt151Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt151Value($opt151Value = null)
    {
        $this->opt15_1Value = $opt151Value;

        return $this;
    }

    /**
     * Get opt151Value.
     *
     * @return int|null
     */
    public function getOpt151Value()
    {
        return $this->opt15_1Value;
    }

    /**
     * Set opt152Value.
     *
     * @param int|null $opt152Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt152Value($opt152Value = null)
    {
        $this->opt15_2Value = $opt152Value;

        return $this;
    }

    /**
     * Get opt152Value.
     *
     * @return int|null
     */
    public function getOpt152Value()
    {
        return $this->opt15_2Value;
    }

    /**
     * Set opt153Value.
     *
     * @param int|null $opt153Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt153Value($opt153Value = null)
    {
        $this->opt15_3Value = $opt153Value;

        return $this;
    }

    /**
     * Get opt153Value.
     *
     * @return int|null
     */
    public function getOpt153Value()
    {
        return $this->opt15_3Value;
    }

    /**
     * Set opt154Value.
     *
     * @param int|null $opt154Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt154Value($opt154Value = null)
    {
        $this->opt15_4Value = $opt154Value;

        return $this;
    }

    /**
     * Get opt154Value.
     *
     * @return int|null
     */
    public function getOpt154Value()
    {
        return $this->opt15_4Value;
    }

    /**
     * Set opt155Value.
     *
     * @param int|null $opt155Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt155Value($opt155Value = null)
    {
        $this->opt15_5Value = $opt155Value;

        return $this;
    }

    /**
     * Get opt155Value.
     *
     * @return int|null
     */
    public function getOpt155Value()
    {
        return $this->opt15_5Value;
    }

    /**
     * Set opt156Value.
     *
     * @param int|null $opt156Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt156Value($opt156Value = null)
    {
        $this->opt15_6Value = $opt156Value;

        return $this;
    }

    /**
     * Get opt156Value.
     *
     * @return int|null
     */
    public function getOpt156Value()
    {
        return $this->opt15_6Value;
    }

    /**
     * Set opt157Value.
     *
     * @param int|null $opt157Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt157Value($opt157Value = null)
    {
        $this->opt15_7Value = $opt157Value;

        return $this;
    }

    /**
     * Get opt157Value.
     *
     * @return int|null
     */
    public function getOpt157Value()
    {
        return $this->opt15_7Value;
    }

    /**
     * Set opt16Enabled.
     *
     * @param bool|null $opt16Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt16Enabled($opt16Enabled = null)
    {
        $this->opt16Enabled = $opt16Enabled;

        return $this;
    }

    /**
     * Get opt16Enabled.
     *
     * @return bool|null
     */
    public function getOpt16Enabled()
    {
        return $this->opt16Enabled;
    }

    /**
     * Set opt161Value.
     *
     * @param int|null $opt161Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt161Value($opt161Value = null)
    {
        $this->opt16_1Value = $opt161Value;

        return $this;
    }

    /**
     * Get opt161Value.
     *
     * @return int|null
     */
    public function getOpt161Value()
    {
        return $this->opt16_1Value;
    }

    /**
     * Set opt162Value.
     *
     * @param int|null $opt162Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt162Value($opt162Value = null)
    {
        $this->opt16_2Value = $opt162Value;

        return $this;
    }

    /**
     * Get opt162Value.
     *
     * @return int|null
     */
    public function getOpt162Value()
    {
        return $this->opt16_2Value;
    }

    /**
     * Set opt163Value.
     *
     * @param int|null $opt163Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt163Value($opt163Value = null)
    {
        $this->opt16_3Value = $opt163Value;

        return $this;
    }

    /**
     * Get opt163Value.
     *
     * @return int|null
     */
    public function getOpt163Value()
    {
        return $this->opt16_3Value;
    }

    /**
     * Set opt17Enabled.
     *
     * @param bool|null $opt17Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt17Enabled($opt17Enabled = null)
    {
        $this->opt17Enabled = $opt17Enabled;

        return $this;
    }

    /**
     * Get opt17Enabled.
     *
     * @return bool|null
     */
    public function getOpt17Enabled()
    {
        return $this->opt17Enabled;
    }

    /**
     * Set opt171Value.
     *
     * @param int|null $opt171Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt171Value($opt171Value = null)
    {
        $this->opt17_1Value = $opt171Value;

        return $this;
    }

    /**
     * Get opt171Value.
     *
     * @return int|null
     */
    public function getOpt171Value()
    {
        return $this->opt17_1Value;
    }

    /**
     * Set opt172Value.
     *
     * @param int|null $opt172Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt172Value($opt172Value = null)
    {
        $this->opt17_2Value = $opt172Value;

        return $this;
    }

    /**
     * Get opt172Value.
     *
     * @return int|null
     */
    public function getOpt172Value()
    {
        return $this->opt17_2Value;
    }

    /**
     * Set opt173Value.
     *
     * @param int|null $opt173Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt173Value($opt173Value = null)
    {
        $this->opt17_3Value = $opt173Value;

        return $this;
    }

    /**
     * Get opt173Value.
     *
     * @return int|null
     */
    public function getOpt173Value()
    {
        return $this->opt17_3Value;
    }

    /**
     * Set opt174Value.
     *
     * @param int|null $opt174Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt174Value($opt174Value = null)
    {
        $this->opt17_4Value = $opt174Value;

        return $this;
    }

    /**
     * Get opt174Value.
     *
     * @return int|null
     */
    public function getOpt174Value()
    {
        return $this->opt17_4Value;
    }

    /**
     * Set opt175Value.
     *
     * @param int|null $opt175Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt175Value($opt175Value = null)
    {
        $this->opt17_5Value = $opt175Value;

        return $this;
    }

    /**
     * Get opt175Value.
     *
     * @return int|null
     */
    public function getOpt175Value()
    {
        return $this->opt17_5Value;
    }

    /**
     * Set opt176Value.
     *
     * @param int|null $opt176Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt176Value($opt176Value = null)
    {
        $this->opt17_6Value = $opt176Value;

        return $this;
    }

    /**
     * Get opt176Value.
     *
     * @return int|null
     */
    public function getOpt176Value()
    {
        return $this->opt17_6Value;
    }

    /**
     * Set opt18Enabled.
     *
     * @param bool|null $opt18Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt18Enabled($opt18Enabled = null)
    {
        $this->opt18Enabled = $opt18Enabled;

        return $this;
    }

    /**
     * Get opt18Enabled.
     *
     * @return bool|null
     */
    public function getOpt18Enabled()
    {
        return $this->opt18Enabled;
    }

    /**
     * Set opt181Value.
     *
     * @param int|null $opt181Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt181Value($opt181Value = null)
    {
        $this->opt18_1Value = $opt181Value;

        return $this;
    }

    /**
     * Get opt181Value.
     *
     * @return int|null
     */
    public function getOpt181Value()
    {
        return $this->opt18_1Value;
    }

    /**
     * Set opt19Enabled.
     *
     * @param bool|null $opt19Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt19Enabled($opt19Enabled = null)
    {
        $this->opt19Enabled = $opt19Enabled;

        return $this;
    }

    /**
     * Get opt19Enabled.
     *
     * @return bool|null
     */
    public function getOpt19Enabled()
    {
        return $this->opt19Enabled;
    }

    /**
     * Set opt191Value.
     *
     * @param int|null $opt191Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt191Value($opt191Value = null)
    {
        $this->opt19_1Value = $opt191Value;

        return $this;
    }

    /**
     * Get opt191Value.
     *
     * @return int|null
     */
    public function getOpt191Value()
    {
        return $this->opt19_1Value;
    }

    /**
     * Set opt192Value.
     *
     * @param int|null $opt192Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt192Value($opt192Value = null)
    {
        $this->opt19_2Value = $opt192Value;

        return $this;
    }

    /**
     * Get opt192Value.
     *
     * @return int|null
     */
    public function getOpt192Value()
    {
        return $this->opt19_2Value;
    }

    /**
     * Set opt20Enabled.
     *
     * @param bool|null $opt20Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt20Enabled($opt20Enabled = null)
    {
        $this->opt20Enabled = $opt20Enabled;

        return $this;
    }

    /**
     * Get opt20Enabled.
     *
     * @return bool|null
     */
    public function getOpt20Enabled()
    {
        return $this->opt20Enabled;
    }

    /**
     * Set opt201Value.
     *
     * @param int|null $opt201Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt201Value($opt201Value = null)
    {
        $this->opt20_1Value = $opt201Value;

        return $this;
    }

    /**
     * Get opt201Value.
     *
     * @return int|null
     */
    public function getOpt201Value()
    {
        return $this->opt20_1Value;
    }

    /**
     * Set opt21Enabled.
     *
     * @param bool|null $opt21Enabled
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt21Enabled($opt21Enabled = null)
    {
        $this->opt21Enabled = $opt21Enabled;

        return $this;
    }

    /**
     * Get opt21Enabled.
     *
     * @return bool|null
     */
    public function getOpt21Enabled()
    {
        return $this->opt21Enabled;
    }

    /**
     * Set opt211Value.
     *
     * @param int|null $opt211Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt211Value($opt211Value = null)
    {
        $this->opt21_1Value = $opt211Value;

        return $this;
    }

    /**
     * Get opt211Value.
     *
     * @return int|null
     */
    public function getOpt211Value()
    {
        return $this->opt21_1Value;
    }

    /**
     * Set opt212Value.
     *
     * @param int|null $opt212Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt212Value($opt212Value = null)
    {
        $this->opt21_2Value = $opt212Value;

        return $this;
    }

    /**
     * Get opt212Value.
     *
     * @return int|null
     */
    public function getOpt212Value()
    {
        return $this->opt21_2Value;
    }

    /**
     * Set opt213Value.
     *
     * @param int|null $opt213Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt213Value($opt213Value = null)
    {
        $this->opt21_3Value = $opt213Value;

        return $this;
    }

    /**
     * Get opt213Value.
     *
     * @return int|null
     */
    public function getOpt213Value()
    {
        return $this->opt21_3Value;
    }

    /**
     * Set opt214Value.
     *
     * @param int|null $opt214Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt214Value($opt214Value = null)
    {
        $this->opt21_4Value = $opt214Value;

        return $this;
    }

    /**
     * Get opt214Value.
     *
     * @return int|null
     */
    public function getOpt214Value()
    {
        return $this->opt21_4Value;
    }

    /**
     * Set opt215Value.
     *
     * @param int|null $opt215Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt215Value($opt215Value = null)
    {
        $this->opt21_5Value = $opt215Value;

        return $this;
    }

    /**
     * Get opt215Value.
     *
     * @return int|null
     */
    public function getOpt215Value()
    {
        return $this->opt21_5Value;
    }

    /**
     * Set opt216Value.
     *
     * @param int|null $opt216Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt216Value($opt216Value = null)
    {
        $this->opt21_6Value = $opt216Value;

        return $this;
    }

    /**
     * Get opt216Value.
     *
     * @return int|null
     */
    public function getOpt216Value()
    {
        return $this->opt21_6Value;
    }

    /**
     * Set opt217Value.
     *
     * @param int|null $opt217Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt217Value($opt217Value = null)
    {
        $this->opt21_7Value = $opt217Value;

        return $this;
    }

    /**
     * Get opt217Value.
     *
     * @return int|null
     */
    public function getOpt217Value()
    {
        return $this->opt21_7Value;
    }

    /**
     * Set opt218Value.
     *
     * @param int|null $opt218Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt218Value($opt218Value = null)
    {
        $this->opt21_8Value = $opt218Value;

        return $this;
    }

    /**
     * Get opt218Value.
     *
     * @return int|null
     */
    public function getOpt218Value()
    {
        return $this->opt21_8Value;
    }

    /**
     * Set opt219Value.
     *
     * @param int|null $opt219Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt219Value($opt219Value = null)
    {
        $this->opt21_9Value = $opt219Value;

        return $this;
    }

    /**
     * Get opt219Value.
     *
     * @return int|null
     */
    public function getOpt219Value()
    {
        return $this->opt21_9Value;
    }

    /**
     * Set opt2110Value.
     *
     * @param int|null $opt2110Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt2110Value($opt2110Value = null)
    {
        $this->opt21_10Value = $opt2110Value;

        return $this;
    }

    /**
     * Get opt2110Value.
     *
     * @return int|null
     */
    public function getOpt2110Value()
    {
        return $this->opt21_10Value;
    }

    /**
     * Set opt2111Value.
     *
     * @param int|null $opt2111Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt2111Value($opt2111Value = null)
    {
        $this->opt21_11Value = $opt2111Value;

        return $this;
    }

    /**
     * Get opt2111Value.
     *
     * @return int|null
     */
    public function getOpt2111Value()
    {
        return $this->opt21_11Value;
    }

    /**
     * Set opt2112Value.
     *
     * @param int|null $opt2112Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt2112Value($opt2112Value = null)
    {
        $this->opt21_12Value = $opt2112Value;

        return $this;
    }

    /**
     * Get opt2112Value.
     *
     * @return int|null
     */
    public function getOpt2112Value()
    {
        return $this->opt21_12Value;
    }

    /**
     * Set opt2113Value.
     *
     * @param int|null $opt2113Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt2113Value($opt2113Value = null)
    {
        $this->opt21_13Value = $opt2113Value;

        return $this;
    }

    /**
     * Get opt2113Value.
     *
     * @return int|null
     */
    public function getOpt2113Value()
    {
        return $this->opt21_13Value;
    }

    /**
     * Set opt2114Value.
     *
     * @param int|null $opt2114Value
     *
     * @return ExpertationsAdvanced
     */
    public function setOpt2114Value($opt2114Value = null)
    {
        $this->opt21_14Value = $opt2114Value;

        return $this;
    }

    /**
     * Get opt2114Value.
     *
     * @return int|null
     */
    public function getOpt2114Value()
    {
        return $this->opt21_14Value;
    }
}
