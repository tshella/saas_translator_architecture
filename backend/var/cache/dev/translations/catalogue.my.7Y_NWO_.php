<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('my', array (
  'validators' => 
  array (
    'This value should be false.' => 'ဤတန်ဖိုးသည် false ဖြစ်ရမည်။',
    'This value should be true.' => 'ဤတန်ဖိုးသည် true ဖြစ်ရမည်။',
    'This value should be of type {{ type }}.' => 'ဤတန်ဖိုးသည် {{ type }} အမျိုးအစားဖြစ်ရမည်။ ',
    'This value should be blank.' => 'ဤတန်ဖိုးသည် ကွပ်လပ်မဖြစ်သင့်ပါ။',
    'The value you selected is not a valid choice.' => 'သင်ရွေးချယ်သောတန်ဖိုးသည် သင့်လျှော်သော် တန်ဖိုးမဟုတ်ပါ။',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'သင်သည် အနည်းဆုံးရွေးချယ်မှု {{ limit }} ခုရွေးချယ်ရမည်။',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'သင်သည်အများဆုံး {{ limit }} ခုသာရွေးချယ်ခွင့်ရှိသည်။',
    'One or more of the given values is invalid.' => 'ပေးထားသောတန်ဖိုးတစ်ခု (သို့မဟုတ်) တစ်ခုထက်ပို၍မမှန်ကန်ပါ။',
    'This field was not expected.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This field is missing.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This value is not a valid date.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော်ရက်စွဲမဟုတ်ပါ။',
    'This value is not a valid datetime.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် ရက်စွဲ/အချိန် မဟုတ်ပါ။',
    'This value is not a valid email address.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် အီးမေးလိပ်စာ မဟုတ်ပါ။',
    'The file could not be found.' => 'ဖိုင်ရှာမတွေ့ပါ။',
    'The file is not readable.' => 'ဤဖိုင်ကို ဖတ်၍မရပါ။',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဖိုင်အရွယ်အစား အလွန်ကြီးနေသည် ({{ size }} {{ suffix }}). ခွင့်ပြုထားသော အများဆုံး ဖိုင်ဆိုဒ်သည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ဖိုင်၏ mime အမျိုးအစားမမှန်ကန်ပါ ({{ type }})။ ခွင့်ပြုထားသော mime အမျိုးအစားများမှာ {{ types }}.',
    'This value should be {{ limit }} or less.' => 'ဤတန်ဖိုးသည် {{ limit }} (သို့မဟုတ်) {{ limit }} ထက်နည်းသင့်သည်။',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{ limit }} (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။ | ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} ခုနှင့်အထက်ရှိသင့်သည်။',
    'This value should be {{ limit }} or more.' => 'ဤတန်ဖိုးသည် {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုသင့်သည်။',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ဤတန်ဖိုးသည် အလွန်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုရှိသင့်သည်။ | ဤတန်ဖိုးသည်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} လုံးနှင့်အထက်ရှိသင့်သည်။',
    'This value should not be blank.' => 'ဤတန်ဖိုးသည်ကွက်လပ်မဖြစ်သင့်ပါ။',
    'This value should not be null.' => 'ဤတန်ဖိုးသည် null မဖြစ်သင့်ပါ။',
    'This value should be null.' => 'ဤတန်ဖိုးသည် null ဖြစ်သင့်သည်။',
    'This value is not valid.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောတန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid time.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော အချိန်တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid URL.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော URL တန်ဖိုးမဟုတ်ပါ။',
    'The two values should be equal.' => 'တန်ဖိုးနှစ်ခုသည် တူညီသင့်သည်။',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။ ခွင့်ပြုထားသည့်အများဆုံးဖိုင်အရွယ်အစားသည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The file is too large.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။',
    'The file could not be uploaded.' => 'ဤဖိုင်ကိုတင်၍မရပါ။',
    'This value should be a valid number.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနံပါတ်ဖြစ်သင့်သည်။',
    'This file is not a valid image.' => 'ဤဖိုင်သည်မှန်ကန်သော ဓါတ်ပုံမဟုတ်ပါ။',
    'This is not a valid IP address.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော IP လိပ်စာ မဟုတ်ပါ။',
    'This value is not a valid language.' => 'ဤတန်ဖိုးသည် မှန်ကန်သောဘာသာစကားမဟုတ်ပါ။',
    'This value is not a valid locale.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောဘာသာပြန်မဟုတ်ပါ။',
    'This value is not a valid country.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနိုင်ငံမဟုတ်ပါ။',
    'This value is already used.' => 'ဤတန်ဖိုးသည် အသုံးပြုပြီးသားဖြစ်သည်။',
    'The size of the image could not be detected.' => 'ဓါတ်ပုံအရွယ်အစားကိုရှာမတွေ့ပါ။',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ပုံ၏အလျားသည် ကြီးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ပုံ၏အလျားသည် သေးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ပုံ၏အနံသည် ကြီးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအနံသည် {{max_height}}px ဖြစ်သည်။',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ပုံ၏အနံသည် သေးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအနံသည် {{min_height}}px ဖြစ်သည်။',
    'This value should be the user\'s current password.' => 'ဤတန်ဖိုးသည်အသုံးပြုသူ၏ လက်ရှိစကားဝှက်ဖြစ်သင့်သည်။',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ဤတန်ဖိုးသည်စာလုံး {{limit}} အတိအကျရှိသင့်သည်။',
    'The file was only partially uploaded.' => 'ဤဖိုင်သည်တစ်စိတ်တစ်ပိုင်းသာ upload တင်ခဲ့သည်။',
    'No file was uploaded.' => 'မည်သည့် ဖိုင်မျှ upload မလုပ်ခဲ့ပါ။',
    'No temporary folder was configured in php.ini.' => 'php.ini တွင်ယာယီဖိုင်တွဲကိုပြင်ဆင်ထားခြင်းမရှိပါ၊ သို့မဟုတ် ပြင်ဆင်ထားသောဖိုင်တွဲမရှိပါ။',
    'Cannot write temporary file to disk.' => 'ယာရီဖိုင်ကို disk မရေးနိုင်ပါ။',
    'A PHP extension caused the upload to fail.' => 'PHP extension တစ်ခုကြောင့် upload တင်၍မရနိုင်ပါ။',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ထို့ထက်မပိုသင့်ပါ။',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'ဤစုစည်းမှုတွင် {{limit}} element အတိအကျပါသင့်သည်။',
    'Invalid card number.' => 'ကဒ်နံပါတ်မမှန်ပါ။',
    'Unsupported card type or invalid card number.' => 'ကဒ်အမျိုးအစားမမှန်ပါ (သို့မဟုတ်) ကဒ်နံပါတ်မမှန်ပါ။',
    'This is not a valid International Bank Account Number (IBAN).' => 'ဤတန်ဖိုးသည် မှန်ကန်သော နိုင်ငံတကာ ဘဏ်စာရင်းနံပါတ် (IBAN) မဟုတ်ပါ။',
    'This value is not a valid ISBN-10.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-10 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISBN-13.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISBN-10 (သို့မဟုတ်) ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISSN.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISSN တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid currency.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ငွေကြေးတန်ဖိုးမဟုတ်ပါ။',
    'This value should be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်ညီသင့်သည်။',
    'This value should be greater than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည်။',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည် (သို့မဟုတ်) ဤတန်ဖိုးသည် {{ compared_value }} ညီသင့်သည်။ ',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူညီမျှသင့်သည်။',
    'This value should be less than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်မနဲသောတဲ့ တန်ဖိုးဖြစ်သင့်သည်။',
    'This value should be less than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက် မနည်းသောတန်ဖိုး (သို့မဟုတ်) ညီမျှသောတန်ဖိုးဖြစ်သင့်သည်။',
    'This value should not be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်မညီသင့်ပါ။',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူမညီမျှသင့်သည်။',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်ကြီးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ max_ratio }} ဖြစ်သည်။',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်သေးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ min_ratio }} ဖြစ်သည်။',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'ဤဓာတ်ပုံသည် စတုရန်းဖြစ်နေသည် ({{ width }}x{{ height }}px)။ စတုရန်းဓာတ်ပုံများကို ခွင့်မပြုပါ။',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် အလျှားလိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). အလျှားလိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် ဒေါင်လိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). ဒေါင်လိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'An empty file is not allowed.' => 'ဖိုင်အလွတ်ကိုတင်ခွင့်မပြုပါ။',
    'The host could not be resolved.' => 'host ဖြေရှင်း၍မနိုင်ပါ။',
    'This value does not match the expected {{ charset }} charset.' => 'ဤတန်ဖိုးသည် မျှော်မှန်းထားသော {{ charset }} စားလုံးနှင့် ကိုက်ညီမှုမရှိပါ။',
    'This is not a valid Business Identifier Code (BIC).' => 'ဤတန်ဖိုးသည် မှန်ကန်သော စီးပွားရေး မှတ်ပုံတင်ကုဒ် (BIC) မဟုတ်ပါ။',
    'Error' => 'အမှား',
    'This is not a valid UUID.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော UUID မဟုတ်ပါ။',
    'This value should be a multiple of {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{compared_value}} ၏ စတူတန်ဖိုးဖြစ်သင့်သည်။',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'ဤ Business Identifier Code (BIC) သည် IBAN {{ iban }} နှင့်ဆက်စပ်မှုမရှိပါ။',
    'This value should be valid JSON.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် JSON တန်ဖိုးဖြစ်သင့်သည်။',
    'This collection should contain only unique elements.' => 'ဤ collection ကိုယ်ပိုင် elements များ ပါသင့်သည်။',
    'This value should be positive.' => 'ဤတန်ဖိုးသည် အပေါင်းဖြစ်သင့်သည်။',
    'This value should be either positive or zero.' => 'ဤတန်ဖိုးသည် အပေါင်း (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value should be negative.' => 'ဤတန်ဖိုးသည် အနုတ် ဖြစ်သင့်သည်။',
    'This value should be either negative or zero.' => 'ဤတန်ဖိုးသည် အနုတ် (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value is not a valid timezone.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော အချိန်ဇုန်မဟုတ်ပါ။',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'ဤစကားဝှက် သည် ဒေတာပေါက်ကြားမှုတစ်ခုဖြစ်ခဲ့သည်။ ဤစကား၀ှက်ကိုအသုံးမပြုရပါ။  ကျေးဇူးပြု၍ အခြားစကားဝှက်ကိုသုံးပါ။',
    'This value should be between {{ min }} and {{ max }}.' => 'ဤတန်ဖိုးသည် {{ min }} နှင့် {{ max }} ကြားရှိသင့်သည်။',
    'This value is not a valid hostname.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် hostname မဟုတ်ပါ။',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'ဤ collection တွင်ပါပါ၀င်သော elements အရေအတွက်သည် {{ compared_value }} ၏ စတူဖြစ်သင့်သည်။ ',
    'This value should satisfy at least one of the following constraints:' => 'ဤတန်ဖိုးသည် အောက်ပါကန့်သတ်ချက်များအနက်မှအနည်းဆုံးတစ်ခု ဖြည့်ဆည်းပေးသင့်သည်။',
    'Each element of this collection should satisfy its own set of constraints.' => 'ဤ collection ၏ element တစ်ခုစီသည်၎င်း၏ကိုယ်ပိုင်ကန့်သတ်ချက်များကိုဖြည့်ဆည်းသင့်သည်။',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် အပြည်ပြည်ဆိုင်ရာငွေချေးသက်သေခံနံပါတ် ,International Securities Identification Number (ISIN) မဟုတ်ပါ။',
    'This value should be a valid expression.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောစကားရပ်ဖြစ်သင့်သည်။',
    'This value is not a valid CSS color.' => 'ဤတန်ဖိုးသည် CSS အရောင်မှန်ကန်မှုမရှိပါ။',
    'This value is not a valid CIDR notation.' => 'ဤတန်ဖိုးသည် CIDR မှတ်စုံမှန်ကန်မှုမရှိပါ။',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'ကွန်ယက်မျက်နှာဖုံး၏ တန်ဖိုးသည် {{ min }} နှင့် {{ max }} ကြားရှိရမည်။',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'ဖိုင်နာမည်သည် အရှည်လွန်းသည်။ သင်္ကေတ {{ filename_max_length }} သို့မဟုတ် နည်းသည့်အရေအတွက်ရှိရမည်။|ဖိုင်နာမည်သည် အရှည်လွန်းသည်။ သင်္ကေတ {{ filename_max_length }} သို့မဟုတ် နည်းသည့်အရေအတွက်ရှိရမည်။',
    'The password strength is too low. Please use a stronger password.' => 'စကားဝှက်ခိုင်မာမှုနည်းပါးသည်။ ပိုခိုင်မာသော စကားဝှက်ကို သုံးပါ။',
    'This value contains characters that are not allowed by the current restriction-level.' => 'ဤတန်ဖိုးတွင် လက်ရှိကန့်သတ်မှုအဆင့်မှ ခွင့်မပြုထားသော ဇာတ်ကောင်များပါဝင်သည်။',
    'Using invisible characters is not allowed.' => 'မမြင်ရသော ဇာတ်ကောင်များကို သုံးခြင်းကို ခွင့်မပြုပါ။',
    'Mixing numbers from different scripts is not allowed.' => 'မတူညီသော ဇာတ်ကောင်များမှ နံပါတ်များကို ရောနှောစပ်ခြင်းကို ခွင့်မပြုပါ။',
    'Using hidden overlay characters is not allowed.' => 'ပုန်းထားသော အထပ်ကောင်းဇာတ်ကောင်များကို သုံးခြင်းကို ခွင့်မပြုပါ။',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'ဖိုင်တွင်းတိုးခြင်းသည် မမှန်ကန်ပါ ({{ extension }})။ ခွင့်ပြုထားသော တိုးခြင်းများမှာ {{ extensions }} ဖြစ်သည်။',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'တွေ့ရှိထားသော စာလုံးကုဒ်စံနစ်သည် မမှန်ကန်ပါ ({{ detected }})။ ခွင့်ပြုထားသော ကုဒ်စံနစ်များမှာ {{ encodings }} ဖြစ်သည်။',
    'This value is not a valid MAC address.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော MAC လိပ်စာ မဟုတ်ပါ။',
    'This URL is missing a top-level domain.' => 'ဤ URL တွင် အမြင့်ဆုံးအဆင့်ဒိုမိန်း ပါဝင်မရှိပါ။',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'ဤတန်ဖိုးသည် အလွန်တိုတောင်းသည်။ အနည်းဆုံး စကားလုံးတစ်လုံး ပါဝင်သင့်သည်။|ဤတန်ဖိုးသည် အလွန်တိုတောင်းသည်။ အနည်းဆုံး စကားလုံး {{ min }} လုံး ပါဝင်သင့်သည်။',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'ဤတန်ဖိုးသည် အလွန်ရှည်လျားသည်။ စကားလုံးတစ်လုံးသာ ပါဝင်သင့်သည်။|ဤတန်ဖိုးသည် အလွန်ရှည်လျားသည်။ စကားလုံး {{ max }} လုံး သို့မဟုတ် ထိုထက်နည်းသည် ပါဝင်သင့်သည်။',
    'This value does not represent a valid week in the ISO 8601 format.' => 'ဤတန်ဖိုးသည် ISO 8601 ပုံစံအတိုင်း မသက်ဆိုင်သော သီတင်းပတ်ကို ကိုယ်စားမပြုပါ။',
    'This value is not a valid week.' => 'ဤတန်ဖိုးသည်မှန်ကန်သည့်အပတ်မဟုတ်ပါ။',
    'This value should not be before week "{{ min }}".' => 'ဤတန်ဖိုးသည် သီတင်းပတ် "{{ min }}" မတိုင်မီ ဖြစ်သင့်သည်မဟုတ်ပါ။',
    'This value should not be after week "{{ max }}".' => 'ဤတန်ဖိုးသည် သီတင်းပတ် "{{ max }}" ပြီးနောက် ဖြစ်သင့်သည်မဟုတ်ပါ။',
    'This value is not a valid Twig template.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော Twig တင်းပလိတ်မဟုတ်ပါ။',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'အသုံးပြုခွင့် ခြွင်းချက်တစ်ခုဖြစ်သွားသည်။',
    'Authentication credentials could not be found.' => 'အသုံးပြုခွင့် အထောက်အထားများ ရှာမတွေ့ပါ။',
    'Authentication request could not be processed due to a system problem.' => 'System ပြဿနာအခက်အခဲရှိ နေပါသဖြင့် အသုံးပြုခွင့်တောင်းဆိုချက်ကို ဆောင်ရွက်၍မရ နိုင်ပါ။',
    'Invalid credentials.' => 'သင့်လျှော်သော် အထောက်အထားမဟုတ်ပါ။',
    'Cookie has already been used by someone else.' => 'Cookie ကို တစ်စုံတစ်ယောက်မှ အသုံးပြုပြီးဖြစ်သည်။',
    'Not privileged to request the resource.' => 'အရင်းအမြစ်ကိုတောင်းဆိုရန်အခွင့်ထူးမရပါ။',
    'Invalid CSRF token.' => 'သင့်လျှော်သော် CSRF token မဟုတ်ပါ။',
    'No authentication provider found to support the authentication token.' => 'အထောက်အထားစိစစ်ခြင်းသင်္ကေတကိုပံ့ပိုးရန် မည်သည့်အထောက်အထားစိစစ်ရေး ၀န်ဆောင်မှုမှမတွေ့ပါ။',
    'No session available, it either timed out or cookies are not enabled.' => 'Session မအားလပ်ပါ။ Session အချိန်ကုန်သွားခြင်း (သို့မဟုတ်) cookies များကိုဖွင့်ထားခြင်းမရှိပါ။',
    'No token could be found.' => 'Toke  ရှာမတွေ့ပါ။',
    'Username could not be found.' => 'အသုံးပြုသူအမည် ရှာဖွေတွေ့ရှိချင်းမရှိပါ။',
    'Account has expired.' => 'အကောင့် သက်တမ်းကုန်လွန်သွားပါပြီ။',
    'Credentials have expired.' => 'အထောက်အထားသက်တန်း ကုန်လွန်သွားပါပြီ။',
    'Account is disabled.' => 'အကောင့်ပိတ်ထားပါသည်။',
    'Account is locked.' => 'အကောင့် လောခ်ကျသွားပါပြီ။',
    'Too many failed login attempts, please try again later.' => 'Login ၀င်ရန်ကြိုးစားမှုများလွန်းပါသည်၊ ကျေးဇူးပြု၍ နောက်မှထပ်ကြိုးစားပါ။',
    'Invalid or expired login link.' => 'မသင့်လျှော်သော် (သို့မဟုတ်) သက်တန်းကုန်သော login link ဖြစ်ပါသည်။',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Login ၀င်ရန်ကြိုးစားမှုများလွန်းပါသည်၊ ကျေးဇူးပြု၍ နောက် %minutes% မှထပ်မံကြိုးစားပါ။',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'ဝင်ရောက်မှု မအောင်မြင်သော ကြိုးပမ်းမှုများအတွက် တစ်ခါတည်း ပြန်လုပ်မည်။ ထပ်မံကြိုးစားကြည့်ပါ။ %minutes% မိနစ်အတွင်း|ဝင်ရောက်မှု မအောင်မြင်သော ကြိုးပမ်းမှုများအတွက် တစ်ခါတည်း ပြန်လုပ်မည်။ ထပ်မံကြိုးစားကြည့်ပါ။ %minutes% မိနစ်အတွင်း',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'This value does not represent a valid week in the ISO 8601 format.',
    'This value is not a valid week.' => 'This value is not a valid week.',
    'This value should not be before week "{{ min }}".' => 'This value should not be before week "{{ min }}".',
    'This value should not be after week "{{ max }}".' => 'This value should not be after week "{{ max }}".',
    'This value is not a valid Twig template.' => 'This value is not a valid Twig template.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
