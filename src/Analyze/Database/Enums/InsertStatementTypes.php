<?php 
namespace Migrate2v3\Analyze\Database\Enums;


//Cause lakes of enums in 7.4 we write them like this 
abstract class InsertStatementTypes
{
    const VALUES = "values";
    const SET = "set";
}