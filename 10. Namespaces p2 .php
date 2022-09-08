<?php

namespace Main\Utilities {
    class Test
    {
    }
    //var_dump(new Main\Filters\Test()); = error
}

namespace Main\Filters {
    class Test
    {
    }
}

namespace{
    var_dump(new Main\Filters\Test());
}

