# Phing Task To Generate Random String

Simple php class to generate a random number for a phing build.

## Basic Usage
```xml
<?xml version="1.0" ?>

<project name="TestingRandomString" default="generateRandomString">

    <taskdef name="randomString" classname="src.PlatinumPixs.RandomString.GenerateTask" />

    <target name="generateRandomString">
        <randomString name="variableName" length="8" stringType="uppercase_numeric" />
    </target>

</project>
```

## Options
<table>
    <tr>
        <td>name</td>
        <td>The variable name that gets assigned for future usage</td>
        <td>Required</td>
        <td>No Default Value</td>
        <td></td>
    </tr>
    <tr>
        <td>length</td>
        <td>The length of the string</td>
        <td>Optional</td>
        <td>16</td>
        <td></td>
    </tr>
    <tr>
        <td>stringType</td>
        <td>The characters inside the string</td>
        <td>Optional</td>
        <td>lowercase_uppercase_numeric</td>
        <td>
            - lowercase_upppercase
            - lowercase
            - uppercase
            - lowercase_uppercase_numeric
            - lowercase_numeric
            - uppercase_numeric
            - numeric
        </td>
    </tr>
</table>

## Installing via Composer

```json
{
    "require": {
        "platinumpixs/phing-random-string": "dev-master"
    }
}
```

If installed via composer the name for the taskdef will be.

```xml
<taskdef name="randomString"
         classname="vendor.platinumpixs.phing-random-string.src.PlatinumPixs.RandomString.GenerateTask" />
```