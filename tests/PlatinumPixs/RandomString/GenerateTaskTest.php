<?php
/**
 * Copyright 2013 Platinum Pixs, LLC. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

/**
 * Provides basic test of phing
 */
class GenerateTaskTest extends BuildFileTest
{
    public function setUp()
    {
        $this->configureProject(PHING_TEST_BASE . '/test-build.xml');
    }

    public function testingCallingTheTestBuildFile()
    {
        $this->executeTarget('generateRandomString');
        $this->assertInLogs('generateRandomString');
        $this->assertInLogs('calling setter GenerateTask::setName');
        $this->assertInLogs('calling setter GenerateTask::setLength');
        $this->assertInLogs('testingRandomString');
    }
}
