//Popular Job Categories
import FirstIcon from "../../assets/first-icon.svg";
import SecondIcon from "../../assets/second-icon.svg";
import ThirdIcon from "../../assets/third-icon.svg";
import FourthIcon from "../../assets/fourth-icon.svg";
import FifthIcon from "../../assets/fifth-icon.svg";
import SixthIcon from "../../assets/sixth-icon.svg";

//Top Rated Jobs
import FirstJob from "../../assets/first-job.svg";
import SecondJob from "../../assets/second-job.svg";
import ThirdJob from "../../assets/third-job.svg";

// On Demand Jobs

// Regukar sized pictures
import Carterer from "../../assets/caterer.svg";
import Carpenter from "../../assets/carpenter.svg";
import Mechanic from "../../assets/mechanic.svg";

// Mini pictures

import Cart from "../../assets/cart.svg";
import Carp from "../../assets/carp.svg";
import Mech from "../../assets/mech.svg";

export const categories = [
  {
    id: `${FirstIcon}`,
    title: "Carpentry",
    desc:
      "Carpentry jobs are majorly indoors and outdoors to include construction, repairs and sometimes installation services mostly with wooden materials, for example frameworks, furniture, kitchen cabinets and locks."
  },
  {
    id: `${SecondIcon}`,
    title: "Bio-harzard",
    desc:
      "This job category are mostly executed both indoors and outdoors to include fumigation, cleaning and waste collection. They play an important role in making our living environment safe and clean for us without any form of harm to the greens."
  },
  {
    id: `${ThirdIcon}`,
    title: "Housing",
    desc:
      "Shelter is one of the basic needs of man without which living seems meaningless. Housing involves many trades and professionals for execution to include architects, engineers, builders, surveyors, carpenters, bricklayers and many more"
  },
  {
    id: `${FourthIcon}`,
    title: "Maintenance",
    desc:
      "This particular job category involves all trades from carpentry to engine repairs and even hair do. At some point we all need to do some maintenance on ourselves, in our private homes, offices, on generators and motor cars."
  },
  {
    id: `${FifthIcon}`,
    title: "Plumbing",
    desc:
      "You might consider the services of a plumber to help fix leaking pipes, toilet flushing problems, water problems, industrial piping, leakage detection and many more."
  },
  {
    id: `${SixthIcon}`,
    title: "Brain Power",
    desc:
      " Are you in need of professionals in different fields to include civil engineers, surveyors, architects, builders, interior designers, renewable energy engineers, geologists, even programmers, digital marketers and so much more."
  }
];

export const topJobs = [
  {
    id: `${FirstJob}`,
    img: `${FirstJob}`,
    title: "Welding",
    bullets: [
      "Prepare welding surface",
      "Attach grounding and camp",
      "Slag",
      "Arc length measurement."
    ]
  },
  {
    id: `${SecondJob}`,
    img: `${SecondJob}`,
    title: "Fumigation",
    bullets: [
      "Seal consumables",
      "Alternative lodging",
      "Open all doors",
      "Give free access"
    ]
  },
  {
    id: `${ThirdJob}`,
    img: `${ThirdJob}`,
    title: "Carpenter",
    bullets: [
      "Measurement drawing",
      "Redevelopment",
      "Layout of furniture",
      "Plumbing plan. equipment"
    ]
  }
];

export const onDemandJobs = [
  {
    id: `${Cart}`,
    logo: `${Carterer}`,
    img: `${Cart}`,
    title: "Carterer"
  },
  {
    id: `${Carp}`,
    logo: `${Carpenter}`,
    img: `${Carp}`,
    title: "Carpenter"
  },
  {
    id: `${Mech}`,
    logo: `${Mechanic}`,
    img: `${Mech}`,
    title: "Mechanic"
  }
];
