import React, { Component } from "react";
import { Accordion, Icon } from "semantic-ui-react";
import { FaqWrapper } from "./faq.styles";
import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";

export class Faq extends Component {
  state = { activeIndex: 0 };

  handleClick = (e, titleProps) => {
    const { index } = titleProps;
    const { activeIndex } = this.state;
    const newIndex = activeIndex === index ? -1 : index;

    this.setState({ activeIndex: newIndex });
  };

  render() {
    const { activeIndex } = this.state;

    return (
      <>
        <SectionHeader regular>Frequently Asked Questions</SectionHeader>
        <FaqWrapper>
          <Accordion styled>
            <Accordion.Title
              active={activeIndex === 0}
              index={0}
              onClick={this.handleClick}
            >
              <Icon name="dropdown" />
              How do I join wocman?
            </Accordion.Title>
            <Accordion.Content active={activeIndex === 0}>
              <p>
                You can join wocman by registering through wocman website,
                submit certificate for verification and vetting, take online
                psychometric test for workmen and get on boarded on the wocman
                app to start earning.
              </p>
            </Accordion.Content>

            <Accordion.Title
              active={activeIndex === 1}
              index={1}
              onClick={this.handleClick}
            >
              <Icon name="dropdown" />
              What qualification do I need to join wocman?
            </Accordion.Title>
            <Accordion.Content active={activeIndex === 1}>
              <p>
                As far as how much we value certification, we accept even
                primary school certificate once you can read and write perfectly
                and also able to use the internet and a mobile device.
              </p>
            </Accordion.Content>

            <Accordion.Title
              active={activeIndex === 2}
              index={2}
              onClick={this.handleClick}
            >
              <Icon name="dropdown" />
              What if I don't know how to use the wocman app at first?
            </Accordion.Title>
            <Accordion.Content active={activeIndex === 2}>
              <p>
                Before you will be on the wocman app, you will need to attend
                our physical induction where you will be taught how to use and
                maximize the woman app to earn with your skills.
              </p>
            </Accordion.Content>

            <Accordion.Title
              active={activeIndex === 3}
              index={3}
              onClick={this.handleClick}
            >
              <Icon name="dropdown" />
              How much can I make in a week?
            </Accordion.Title>
            <Accordion.Content active={activeIndex === 3}>
              <p>
                At wocman you can make about 50,000 naira in a week depending on
                how fast and good you are at your trade.
              </p>
            </Accordion.Content>

            <Accordion.Title
              active={activeIndex === 4}
              index={4}
              onClick={this.handleClick}
            >
              <Icon name="dropdown" />
              Can i work anytime and anywhere?
            </Accordion.Title>
            <Accordion.Content active={activeIndex === 4}>
              <p>
                All work execution tasks starts at 7am and ends at 7pm daily so
                you can only work within this time frame, you can work anywhere
                you want within the areas where our service is available to
                include for now, Ikeja, Ojodu, Ogudu, Gbagada, Ikoyi, Oregun,
                Surulere, Yaba, Lekki and Lagos island.
              </p>
            </Accordion.Content>
          </Accordion>
        </FaqWrapper>
      </>
    );
  }
}
