typedef enum
{                         /* ISO 15924 code */
  G_UNICODE_SCRIPT_INVALID_CODE = -1,
  G_UNICODE_SCRIPT_COMMON       = 0,   /* Zyyy */
  G_UNICODE_SCRIPT_INHERITED,          /* Zinh (Qaai) */
  G_UNICODE_SCRIPT_ARABIC,             /* Arab */
  G_UNICODE_SCRIPT_ARMENIAN,           /* Armn */
  G_UNICODE_SCRIPT_BENGALI,            /* Beng */
  G_UNICODE_SCRIPT_BOPOMOFO,           /* Bopo */
  G_UNICODE_SCRIPT_CHEROKEE,           /* Cher */
  G_UNICODE_SCRIPT_COPTIC,             /* Copt (Qaac) */
  G_UNICODE_SCRIPT_CYRILLIC,           /* Cyrl (Cyrs) */
  G_UNICODE_SCRIPT_DESERET,            /* Dsrt */
  G_UNICODE_SCRIPT_DEVANAGARI,         /* Deva */
  G_UNICODE_SCRIPT_ETHIOPIC,           /* Ethi */
  G_UNICODE_SCRIPT_GEORGIAN,           /* Geor (Geon, Geoa) */
  G_UNICODE_SCRIPT_GOTHIC,             /* Goth */
  G_UNICODE_SCRIPT_GREEK,              /* Grek */
  G_UNICODE_SCRIPT_GUJARATI,           /* Gujr */
  G_UNICODE_SCRIPT_GURMUKHI,           /* Guru */
  G_UNICODE_SCRIPT_HAN,                /* Hani */
  G_UNICODE_SCRIPT_HANGUL,             /* Hang */
  G_UNICODE_SCRIPT_HEBREW,             /* Hebr */
  G_UNICODE_SCRIPT_HIRAGANA,           /* Hira */
  G_UNICODE_SCRIPT_KANNADA,            /* Knda */
  G_UNICODE_SCRIPT_KATAKANA,           /* Kana */
  G_UNICODE_SCRIPT_KHMER,              /* Khmr */
  G_UNICODE_SCRIPT_LAO,                /* Laoo */
  G_UNICODE_SCRIPT_LATIN,              /* Latn (Latf, Latg) */
  G_UNICODE_SCRIPT_MALAYALAM,          /* Mlym */
  G_UNICODE_SCRIPT_MONGOLIAN,          /* Mong */
  G_UNICODE_SCRIPT_MYANMAR,            /* Mymr */
  G_UNICODE_SCRIPT_OGHAM,              /* Ogam */
  G_UNICODE_SCRIPT_OLD_ITALIC,         /* Ital */
  G_UNICODE_SCRIPT_ORIYA,              /* Orya */
  G_UNICODE_SCRIPT_RUNIC,              /* Runr */
  G_UNICODE_SCRIPT_SINHALA,            /* Sinh */
  G_UNICODE_SCRIPT_SYRIAC,             /* Syrc (Syrj, Syrn, Syre) */
  G_UNICODE_SCRIPT_TAMIL,              /* Taml */
  G_UNICODE_SCRIPT_TELUGU,             /* Telu */
  G_UNICODE_SCRIPT_THAANA,             /* Thaa */
  G_UNICODE_SCRIPT_THAI,               /* Thai */
  G_UNICODE_SCRIPT_TIBETAN,            /* Tibt */
  G_UNICODE_SCRIPT_CANADIAN_ABORIGINAL, /* Cans */
  G_UNICODE_SCRIPT_YI,                 /* Yiii */
  G_UNICODE_SCRIPT_TAGALOG,            /* Tglg */
  G_UNICODE_SCRIPT_HANUNOO,            /* Hano */
  G_UNICODE_SCRIPT_BUHID,              /* Buhd */
  G_UNICODE_SCRIPT_TAGBANWA,           /* Tagb */

  /* Unicode-4.0 additions */
  G_UNICODE_SCRIPT_BRAILLE,            /* Brai */
  G_UNICODE_SCRIPT_CYPRIOT,            /* Cprt */
  G_UNICODE_SCRIPT_LIMBU,              /* Limb */
  G_UNICODE_SCRIPT_OSMANYA,            /* Osma */
  G_UNICODE_SCRIPT_SHAVIAN,            /* Shaw */
  G_UNICODE_SCRIPT_LINEAR_B,           /* Linb */
  G_UNICODE_SCRIPT_TAI_LE,             /* Tale */
  G_UNICODE_SCRIPT_UGARITIC,           /* Ugar */

  /* Unicode-4.1 additions */
  G_UNICODE_SCRIPT_NEW_TAI_LUE,        /* Talu */
  G_UNICODE_SCRIPT_BUGINESE,           /* Bugi */
  G_UNICODE_SCRIPT_GLAGOLITIC,         /* Glag */
  G_UNICODE_SCRIPT_TIFINAGH,           /* Tfng */
  G_UNICODE_SCRIPT_SYLOTI_NAGRI,       /* Sylo */
  G_UNICODE_SCRIPT_OLD_PERSIAN,        /* Xpeo */
  G_UNICODE_SCRIPT_KHAROSHTHI,         /* Khar */

  /* Unicode-5.0 additions */
  G_UNICODE_SCRIPT_UNKNOWN,            /* Zzzz */
  G_UNICODE_SCRIPT_BALINESE,           /* Bali */
  G_UNICODE_SCRIPT_CUNEIFORM,          /* Xsux */
  G_UNICODE_SCRIPT_PHOENICIAN,         /* Phnx */
  G_UNICODE_SCRIPT_PHAGS_PA,           /* Phag */
  G_UNICODE_SCRIPT_NKO,                /* Nkoo */

  /* Unicode-5.1 additions */
  G_UNICODE_SCRIPT_KAYAH_LI,           /* Kali */
  G_UNICODE_SCRIPT_LEPCHA,             /* Lepc */
  G_UNICODE_SCRIPT_REJANG,             /* Rjng */
  G_UNICODE_SCRIPT_SUNDANESE,          /* Sund */
  G_UNICODE_SCRIPT_SAURASHTRA,         /* Saur */
  G_UNICODE_SCRIPT_CHAM,               /* Cham */
  G_UNICODE_SCRIPT_OL_CHIKI,           /* Olck */
  G_UNICODE_SCRIPT_VAI,                /* Vaii */
  G_UNICODE_SCRIPT_CARIAN,             /* Cari */
  G_UNICODE_SCRIPT_LYCIAN,             /* Lyci */
  G_UNICODE_SCRIPT_LYDIAN,             /* Lydi */

  /* Unicode-5.2 additions */
  G_UNICODE_SCRIPT_AVESTAN,                /* Avst */
  G_UNICODE_SCRIPT_BAMUM,                  /* Bamu */
  G_UNICODE_SCRIPT_EGYPTIAN_HIEROGLYPHS,   /* Egyp */
  G_UNICODE_SCRIPT_IMPERIAL_ARAMAIC,       /* Armi */
  G_UNICODE_SCRIPT_INSCRIPTIONAL_PAHLAVI,  /* Phli */
  G_UNICODE_SCRIPT_INSCRIPTIONAL_PARTHIAN, /* Prti */
  G_UNICODE_SCRIPT_JAVANESE,               /* Java */
  G_UNICODE_SCRIPT_KAITHI,                 /* Kthi */
  G_UNICODE_SCRIPT_LISU,                   /* Lisu */
  G_UNICODE_SCRIPT_MEETEI_MAYEK,           /* Mtei */
  G_UNICODE_SCRIPT_OLD_SOUTH_ARABIAN,      /* Sarb */
  G_UNICODE_SCRIPT_OLD_TURKIC,             /* Orkh */
  G_UNICODE_SCRIPT_SAMARITAN,              /* Samr */
  G_UNICODE_SCRIPT_TAI_THAM,               /* Lana */
  G_UNICODE_SCRIPT_TAI_VIET,               /* Tavt */

  /* Unicode-6.0 additions */
  G_UNICODE_SCRIPT_BATAK,                  /* Batk */
  G_UNICODE_SCRIPT_BRAHMI,                 /* Brah */
  G_UNICODE_SCRIPT_MANDAIC,                /* Mand */

  /* Unicode-6.1 additions */
  G_UNICODE_SCRIPT_CHAKMA,                 /* Cakm */
  G_UNICODE_SCRIPT_MEROITIC_CURSIVE,       /* Merc */
  G_UNICODE_SCRIPT_MEROITIC_HIEROGLYPHS,   /* Mero */
  G_UNICODE_SCRIPT_MIAO,                   /* Plrd */
  G_UNICODE_SCRIPT_SHARADA,                /* Shrd */
  G_UNICODE_SCRIPT_SORA_SOMPENG,           /* Sora */
  G_UNICODE_SCRIPT_TAKRI,                  /* Takr */

  /* Unicode 7.0 additions */
  G_UNICODE_SCRIPT_BASSA_VAH,              /* Bass */
  G_UNICODE_SCRIPT_CAUCASIAN_ALBANIAN,     /* Aghb */
  G_UNICODE_SCRIPT_DUPLOYAN,               /* Dupl */
  G_UNICODE_SCRIPT_ELBASAN,                /* Elba */
  G_UNICODE_SCRIPT_GRANTHA,                /* Gran */
  G_UNICODE_SCRIPT_KHOJKI,                 /* Khoj */
  G_UNICODE_SCRIPT_KHUDAWADI,              /* Sind */
  G_UNICODE_SCRIPT_LINEAR_A,               /* Lina */
  G_UNICODE_SCRIPT_MAHAJANI,               /* Mahj */
  G_UNICODE_SCRIPT_MANICHAEAN,             /* Manu */
  G_UNICODE_SCRIPT_MENDE_KIKAKUI,          /* Mend */
  G_UNICODE_SCRIPT_MODI,                   /* Modi */
  G_UNICODE_SCRIPT_MRO,                    /* Mroo */
  G_UNICODE_SCRIPT_NABATAEAN,              /* Nbat */
  G_UNICODE_SCRIPT_OLD_NORTH_ARABIAN,      /* Narb */
  G_UNICODE_SCRIPT_OLD_PERMIC,             /* Perm */
  G_UNICODE_SCRIPT_PAHAWH_HMONG,           /* Hmng */
  G_UNICODE_SCRIPT_PALMYRENE,              /* Palm */
  G_UNICODE_SCRIPT_PAU_CIN_HAU,            /* Pauc */
  G_UNICODE_SCRIPT_PSALTER_PAHLAVI,        /* Phlp */
  G_UNICODE_SCRIPT_SIDDHAM,                /* Sidd */
  G_UNICODE_SCRIPT_TIRHUTA,                /* Tirh */
  G_UNICODE_SCRIPT_WARANG_CITI,            /* Wara */

  /* Unicode 8.0 additions */
  G_UNICODE_SCRIPT_AHOM,                   /* Ahom */
  G_UNICODE_SCRIPT_ANATOLIAN_HIEROGLYPHS,  /* Hluw */
  G_UNICODE_SCRIPT_HATRAN,                 /* Hatr */
  G_UNICODE_SCRIPT_MULTANI,                /* Mult */
  G_UNICODE_SCRIPT_OLD_HUNGARIAN,          /* Hung */
  G_UNICODE_SCRIPT_SIGNWRITING,            /* Sgnw */

  /* Unicode 9.0 additions */
  G_UNICODE_SCRIPT_ADLAM,                  /* Adlm */
  G_UNICODE_SCRIPT_BHAIKSUKI,              /* Bhks */
  G_UNICODE_SCRIPT_MARCHEN,                /* Marc */
  G_UNICODE_SCRIPT_NEWA,                   /* Newa */
  G_UNICODE_SCRIPT_OSAGE,                  /* Osge */
  G_UNICODE_SCRIPT_TANGUT,                 /* Tang */

  /* Unicode 10.0 additions */
  G_UNICODE_SCRIPT_MASARAM_GONDI,          /* Gonm */
  G_UNICODE_SCRIPT_NUSHU,                  /* Nshu */
  G_UNICODE_SCRIPT_SOYOMBO,                /* Soyo */
  G_UNICODE_SCRIPT_ZANABAZAR_SQUARE        /* Zanb */
} GUnicodeScript;
