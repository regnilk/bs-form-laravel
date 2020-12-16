# Bs-Form-Laravel

Laravel components for easy form building

[![Name](https://badgen.net/packagist/name/regnilk/bs-form-laravel?color=blue)](https://packagist.org/packages/regnilk/bs-laravel)
[![Latest stable release](https://badgen.net/packagist/v/regnilk/bs-form-laravel?color=cyan)](https://packagist.org/packages/regnilk/bs-form-laravel)
[![Name](https://badgen.net/github/last-commit/regnilk/bs-form-laravel?color=green)](https://github.com/regnilk/bs-form-laravel)

[![Total Download](https://badgen.net/packagist/dt/regnilk/bs-form-laravel?color=green)](https://github.com/regnilk/bs-form-laravel)
[![GitHub Watchers](https://badgen.net/packagist/ghw/regnilk/bs-form-laravel?color=blue)](https://github.com/regnilk/bs-form-laravel)
[![GitHub Stars](https://badgen.net/packagist/ghs/regnilk/bs-form-laravel?color=yellow)](https://github.com/regnilk/bs-form-laravel)
[![GitHub Followers](https://badgen.net/packagist/ghf/regnilk/bs-form-laravel?color=cyan)](https://github.com/regnilk/bs-form-laravel)

[![php](https://badgen.net/packagist/php/regnilk/bs-modal-laravel?color=orange)]()
[![laravel](https://badgen.net/badge/Laravel/&gt;&equals;8.0?color=orange)]()
[![bootstrap](https://badgen.net/badge/Bootstrap/&gt;&equals;4.0?color=orange)]()
[![laravelCollective/html](https://badgen.net/badge/LaravelCollective-html/&gt;&equals;6.0?color=orange)]()
[![fa-laravel](https://badgen.net/badge/regnilk-fa-laravel/&gt;&equals;1.1?color=orange)]()

[![License](https://badgen.net/packagist/license/regnilk/bs-form-laravel)]()

> **Note** : This package is to be used with Laravel v8 and Bootstrap v4
>
> It also requires [LaravelCollective/Html](https://laravelcollective.com/docs/6.x/html) v6

* [Installation](#installation)
* [Configuration](#configuration)
* [Form](#Form)
    * [Opening a form](#opening)
    * [Closing a form](#closing)
    * [Form element](#element)
* [Inputs](#inputs)
    * [Text](#text)
    * [Textarea](#textarea)
    * [Hidden](#hidden)
    * [Number](#number)
    * [Password](#password)
    * [Email](#email)
    * [Date](#date)
    * [File](#file)
    * [Checkbox](#checkbox)
    * [Radio](#radio)
    * [Select](#select)
    * [Select Range](#select_range)
* [Buttons](#buttons)
    * [Submit](#submit)
    * [Reset](#reset)
    * [Back](#back)
* [Usage](#usage)
* [Contact](#contact)
* [License](#license)
* [Copyright](#copyright)

## Installation

Install the package via Composer:

```sh
    $ composer require regnilk/bs-form-laravel
```
    
The package service provider will be registered automatically.

## Configuration

No configuration is required.

## Form

##### <ins>Opening a form</ins>

To open a form, call the corresponding component

```html
    <x-form-open url="{{url('/home'}}" />
    <x-form-open :url="$url" />
```

This component can receive various parameters : 

- **_url_** : where the form will be submit.

- **_route_** : if you prefer, you can indicate a route name, with or without parameter(s).

```html
    <x-form-open route="routeName" />
    <x-form-open :route="['routeName', $object->id]" />
```

> if the url is not null, the route will be ignored.

- **_action_** : it works the same way as the route parameter.

```html
    <x-form-open route="routeName" />
    <x-form-open :route="['routeName', $object->id]" />
```

> if the url or the route are not null, the action will be ignored.

- **_method_** : You can choose the form's method among get, post, put, patch and delete.

```html
    <x-form-open url="{{url('/user/update'}}" method="patch" />
```

> By default, the method is set to post.

- **_files_** : Indicates if the form contains file(s) field(s)

```html
    <x-form-open url="{{url('/file/upload'}}" files="true" />
```

> By default, this parameter is set to false.

##### <ins>Closing a form</ins>

```html
    <x-form-close />
```

##### <ins>Form element</ins>

The inputs components must be surrounded by an element component. 

The element component contains the label and the bootstrap structure.

 ```html
     <x-form-elem name="myElem" label="myLabel">
    //Input will be placed here     
    </x-form-elem>
 ```

Here is the component's parameters list. Only the name and label are mandatory.

- **_name_** : the name of the element.

> **Warning** : It must match the name of the input to work.

- **_label_** : The label text.

- **_icon_** : An icon shortcut. The icons are provided by [regnilk/fa-laravel](#https://github.com/regnilk/fa-laravel). Be sure to have configured it to have your icons displayed properly.

> By default, no icon is shown.

- **_width_** : the width of the element. It can be from 1 to 12 because it uses the bootstrap col system.

> This value is set to 12 by default.

- **_label-width_** : the width of the label in px.

> By default, this value is set to 150px.

Here is a full example :

```html
     <x-form-elem name="myElem" label="myLabel" icon="ok" width="8" label-width="180">
         //Input will be placed here     
     </x-form-elem>
 ```

## Inputs

Use all these input components inside a x-form-elem component.

> Each of them can be customized with usual class, style, etc.

**Tips** :

If you need to provide a php variable as a paramater value, just change this 

```html
    <x-form-elem name="myText" label="myLabel"></x-form-elem>
```

to this

```html
    <x-form-elem name="myText" :label="$label"></x-form-elem>
```

If you want a helping text displayed under the field. Do as follows :

```html
    <x-form-elem name="myText" :label="$label" help="this field is required"></x-form-elem>
```

##### <ins>Text</ins> 

```html
    <x-form-elem name="myText" label="myLabel">
        <x-form-text name="myText" :value="$text"/>
    </x-form-elem>
```

- **_name_** : the name of the field. It must match the name of the x-form-elem.

- **_value_** : the value to fill the field with _(optional)_

##### <ins>Textarea</ins> 

```html
    <x-form-elem name="myTextArea" label="myLabel">
        <x-form-text name="myTextArea" :value="$textarea" />
    </x-form-elem>
```

- **_name_** : the name of the field. It must match the name of the x-form-elem.

- **_value_** : the value to fill the field with _(optional)_

##### <ins>Hidden</ins> 

```html
    <x-form-text name="myHiddenField" :value="$myHiddenValue"/>
```

- **_name_** : the name of the field. It must match the name of the x-form-elem.

- **_value_** : the value to fill the field with _(optional)_

> Note that there id no need to wrap the hidden component within a x-form-elem for it will not be displayed 

##### <ins>Number</ins>

```html
    <x-form-elem name="myNumber" label="myLabel">
        <x-form-number name="myNumber" :value="$number"/>
    </x-form-elem>
```
- **_name_** : the name of the field. It must match the name of the x-form-elem.

- **_value_** : the value to fill the field with _(optional)_

##### <ins>Password</ins>

```html
    <x-form-elem name="myPassword" label="myLabel">
        <x-form-password name="myPassword" />
    </x-form-elem>
```
- **_name_** : the name of the field. It must match the name of the x-form-elem.

##### <ins>Email</ins>

```html
    <x-form-elem name="myEmail" label="myLabel">
        <x-form-email name="myEmail" :value="$email"/>
    </x-form-elem>
```
- **_name_** : the name of the field. It must match the name of the x-form-elem.

- **_value_** : the value to fill the field with _(optional)_

##### <ins>Date</ins>

```html
    <x-form-elem name="myDate" label="myLabel">
        <x-form-date name="myDate" value="1993-05-26"/>
    </x-form-elem>
```
- **_name_** : the name of the field. It must match the name of the x-form-elem.

- **_value_** : the value to fill the field with _(optional)_. Use the YYYY-mm-dd format.

##### <ins>File</ins>

```html
    <x-form-elem name="myFile" label="myLabel">
        <x-form-file name="myFile"/>
    </x-form-elem>
```

- **_name_** : the name of the field. It must match the name of the x-form-elem.


##### <ins>Checkbox</ins>

```html
    <x-form-elem name="myFile" label="myLabel">
        <x-form-check name="check1" label="label 1" value="1" />
        <x-form-check name="check2" label="label 2" value="2" />
        <x-form-check name="check2" label="label 2" value="3" checked="true" />
    </x-form-elem>
```

- **_name_** : the name of the field.

- **_label_** : the label of the checkbox.

- **_value_** : the value associated to the checkbox _(optional)_.

- **_checked_** : defines the checkbox as checked. By default it's set to false _(optional)_ 



##### <ins>Radio</ins>

```html
    <x-form-elem name="radio" label="myLabel">
       <x-form-radio name="radio" label="label 1" value="1" checked="true" />
       <x-form-radio name="radio" label="label 2" value="2"/>
       <x-form-radio name="radio" label="label 3" value="3"/>
    </x-form-elem>
```
- **_name_** : the name of the radio buttons. It must be the same for each radio button of the group and match the x-form-elem name.

- **_label_** : the label of the radio button.

- **_value_** : the value associated to the radio _(optional)_.

- **_checked_** : defines the radio button as checked. By default it's set to false _(optional)_ 

##### <ins>Select</ins>

```html
    <x-form-elem name="mySelect" label="myLabel" icon="ok">
        <x-form-select name="mySelect" :options="$users" label="fullName" key="id" placeholder="choisissez" :selected="$user->id" />
    </x-form-elem>
```

- **_name_** : the name of the select. It must match the x-form-elem name.

- **_options_** : The array of options to display in the select.

> It can be an array of arrays or a collection. 

- **_label_** : the property that will be used as text in the options.

- **_key_** : the property that will be used as value in the options, "id" by default _(optional)_.

- **_selected_** : the value of the key that will be selected by default _(optional)_

- **_placeholder_** : It will add an option at the first position with no value. _(optional)_ 

##### <ins>Select range</ins>

```html
    <x-form-elem name="mySelectRange" label="myLabel" icon="ok">
        <x-form-select-range name="mySelectRange" start="0" end="20" selected="11" placeholder="select a number"/>
    </x-form-elem>
```

> Generate a select with numeric values from "start" to "end"

- **_name_** : the name of the select range. It must match the x-form-elem name.

- **_start_** : the lower value of the select range.

- **_end_** : the highest value of the select range.

- **_selected_** : the value of the key that will be selected by default _(optional)_

- **_placeholder_** : It will add an option at the first position with no value. _(optional)_ 

## Buttons

You can generate three buttons to your form.

These buttons can contain icons. They are provided by [regnilk/fa-laravel](#https://github.com/regnilk/fa-laravel). Be sure to have configured it to have your icons displayed properly.

> You have to put boostrap classes to choose the button's style. Only the 'btn' class is already present.

##### <ins>Submit</ins>

```html
    <x-form-btn-submit icon="add" text="Add" class="btn-sm btn-success"/>
```

- **_icon_** : the icon displayed in the button _(optional)_. 

- **_text_** : the text of the button. 'OK' is the default text. _(optional)_

##### <ins>Reset</ins>

```html
    <x-form-btn-reset icon="reset" text="Reset" class="btn-sm btn-secondary"/>
```

- **_icon_** : the icon displayed in the button _(optional)_. 

- **_text_** : the text of the button. 'Reset' is the default text. _(optional)_

##### <ins>Back</ins>

```html
    <x-form-btn-back icon="back" text="Back" class="btn-sm btn-info"/>
```

- **_icon_** : the icon displayed in the button _(optional)_. 

- **_text_** : the text of the button. 'Back' is the default text. _(optional)_

##Usage

##### <ins>Working with errors</ins>

Errors can be displayed in the bootstrap style for each input.
The fields can also be repopulated when an error occurs.

To have it working, you will need to do your redirection this way in your controller :

```php
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()):
            return redirect()->back()->withInput()->withErrors($validator);
        else:
            //Validator OK
        endif;
    }
```

## Contact

Please use [GitHub](https://github.com/regnilk/bs-form-laravel) for making comments or suggestions or to report bugs.

## License

[Bs-Form-Laravel](https://github.com/regnilk/bs-form-laravel) written by Regnilk and released under the [MIT License](LICENSE).

## Copyright

Copyright &copy; 2020 Regnilk